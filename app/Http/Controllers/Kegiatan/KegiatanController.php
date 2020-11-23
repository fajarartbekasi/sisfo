<?php

namespace App\Http\Controllers\Kegiatan;

use App\Kegiatan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class KegiatanController extends Controller
{
    public function create()
    {
        return view('kegiatan.create');
    }
    public function store()
    {
        $kegiatan = Kegiatan::create($this->validateRequest());

        $this->storeImage($kegiatan);

        return redirect()->back()->with(['success' => 'Kegiatan Masjid Ziaadaturrahman berhasil di tambah']);
    }

    private function validateRequest(){
        return tap(request()->validate([
                'judul'             => 'required',
                'pengisi_materi'    => 'required',
                'tanggal_kegiatan'  => 'required',
                'jam'               => 'required',
                'status'            => 'required',
                'images'            => 'required|file|image|max:5000',
            ]), function(){
                if(request()->hasFile('images')){
                    request()->validate([
                         'images'  => 'required|file|image|max:5000',
                    ]);
                }
        });
    }

    private function storeImage($kegiatan){
        if (request()->has('images')){
            $kegiatan->update([
                'images'    => request()->images->store('uploads', 'public'),
            ]);

            $image = Image::make(public_path('storage/'. $kegiatan->images))->fit(300, 300, null, 'top-left');
            $image->save();
        }
    }
}
