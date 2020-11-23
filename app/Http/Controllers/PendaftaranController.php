<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;

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

    public function store()
    {
        $pendaftaran = Pendaftaran::create($this->validateRequest());

        return redirect()->back()->with(['success' => 'Pendaftaran kamu telah dikirim terimakasih']);
    }

    public function show($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);

        return view('pendaftaran.show', compact('pendaftaran'));
    }
    public function update(Pendaftaran $pendaftaran)
    {
        $pendaftaran->update($this->validateRequest());

        return redirect()->back()->with(['success' => 'Pendaftaran berhasil di perbarui']);
    }
    private function validateRequest(){
        return request()->validate([
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
    }
}
