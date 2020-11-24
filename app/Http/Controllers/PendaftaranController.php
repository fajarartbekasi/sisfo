<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftarans = Pendaftaran::where('status','daftar')->paginate(5);

        return view('pendaftaran.index', compact('pendaftarans'));
    }
    public function create()
    {
        return view('pendaftaran.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'pilihan_masuk'  => 'required',
            'nama'           => 'required',
            'jenis_kelamin'  => 'required',
            'kelas'          => 'required',
            'jumlah_sodara'  => 'required',
            'alamat'         => 'required',
            'ayah'           => 'required',
            'ibu'            => 'required',
            'pekerjaan_ibu'  => 'required',
            'pekerjaan_ayah' => 'required',
            'alamat_orangtua'=> 'required',
            'no_telp'        => 'required',
            'status'         => 'required',
        ]);
        Nexmo::message()->send([
            'to'   => $request->get('no_telp'),
            'from' => '16105552344',
            'text' => 'Assallamuallaikum.wr.wb'.$request->get('nama').
                      'kami dari TPQ Masjid Ziaadaturahman ingin memberitahukan bahwa pendaftaran kamu telah diterima
                      harap melakukan test seleksi untuk tahap berikut nya untuk informasi test
                      akan kami beritahukan di situs web kami dengan cara cek kegiatan terimakasih.'
        ]);
        $pendaftaran = Pendaftaran::create([
            'pilihan_masuk'  => $request->input('pilihan_masuk'),
            'nama'           => $request->input('nama'),
            'jenis_kelamin'  => $request->input('jenis_kelamin'),
            'kelas'          => $request->input('kelas'),
            'jumlah_sodara'  => $request->input('jumlah_sodara'),
            'alamat'         => $request->input('alamat'),
            'ayah'           => $request->input('ayah'),
            'ibu'            => $request->input('ibu'),
            'pekerjaan_ibu'  => $request->input('pekerjaan_ibu'),
            'pekerjaan_ayah' => $request->input('pekerjaan_ayah'),
            'alamat_orangtua'=> $request->input('alamat_orangtua'),
            'no_telp'        => $request->input('no_telp'),
            'status'         => $request->input('status'),
        ]);

        return redirect()->back()->with(['success' => 'Pendaftaran kamu telah dikirim terimakasih']);
    }

    public function show($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);

        return view('pendaftaran.show', compact('pendaftaran'));
    }
    public function update(Request $request, $id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);

        Nexmo::message()->send([
            'to'   => $pendaftaran->no_telp,
            'from' => '16105552344',
            'text' => 'Assallamuallaikum.wr.wb'
                      .$pendaftaran->nama.
                      'kami dari TPQ Masjid Ziaadaturahman ingin memberitahukan bahwa hasil seleksi kamu dinyatakan'
                      .$pendaftaran->status.
                      'terimakasih telah melakukan pendaftaran dan mengikuti test di TPQ Masjid Ziaadaturahman semoga kamu terus semangat terimakasih'
        ]);

        $pendaftaran->update($request->all());

        return redirect()->back()->with(['success' => 'Pendaftaran berhasil di perbarui']);
    }
}
