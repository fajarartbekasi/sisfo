<?php

namespace App\Http\Controllers\Santri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DitolakController extends Controller
{
    public function index()
    {
        return view('Data.Santri.Ditolak.index');
    }
}
