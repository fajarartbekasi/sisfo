<?php

namespace App\Http\Controllers\User;

use App\Kegiatan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::where('status', 'Availlable')->paginate(3);

        return view('user.kegiatan.index', compact('kegiatans'));
    }
}
