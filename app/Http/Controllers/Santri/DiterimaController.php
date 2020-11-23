<?php

namespace App\Http\Controllers\Santri;

use App\Pendaftaran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiterimaController extends Controller
{
    public function index()
    {
        $diterimas = Pendaftaran::where('status', 'di terima')->paginate(5);

        return view('Data.Santri.diterima.index', compact('diterimas'));
    }
}
