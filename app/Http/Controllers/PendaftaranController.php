<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;
use App\Mail\PendaftaranMail;
use App\Mail\StatusMail;
use Illuminate\Support\Facades\Mail;

class PendaftaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['create', 'store']]);
    }
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
            'email'          => 'required',
            'status'         => 'required',
        ]);

        $to = Mail::to($pendaftaran->email)->send(new PendaftaranMail($pendaftaran));

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
            'email'          => $request->input('email'),
            'status'         => $request->input('status'),
        ]);

        return redirect()->back()->with(['success' => 'Pendaftaran kamu telah dikirim silahkan cek email anda terimakasih']);
    }

    public function show($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);

        return view('pendaftaran.show', compact('pendaftaran'));
    }
    public function update(Request $request, $id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);

        $pendaftaran->update($request->all());

        $to = Mail::to($pendaftaran->email)->send(new StatusMail($pendaftaran));

        return redirect()->back()->with(['success' => 'Pendaftaran berhasil di perbarui']);
    }
}
