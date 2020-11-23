<?php

namespace App\Http\Controllers\Santri;

use App\Pendaftaran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DitolakController extends Controller
{
    public function index()
    {
        $ditolaks = Pendaftaran::where('status', 'di tolak')->paginate(5);
        return view('Data.Santri.Ditolak.index', compact('ditolaks'));
    }
}
