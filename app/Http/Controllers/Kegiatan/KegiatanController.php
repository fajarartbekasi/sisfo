<?php

namespace App\Http\Controllers\Kegiatan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function create()
    {
        return view('kegiatan.create');
    }
}
