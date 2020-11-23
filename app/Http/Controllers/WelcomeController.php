<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::where('status', 'Availlable')->paginate(3);

        return view('welcome', compact('kegiatans'));
    }
}
