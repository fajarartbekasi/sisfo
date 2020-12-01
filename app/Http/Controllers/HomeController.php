<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'diterima' => Pendaftaran::where('status', 'di terima')->count(),
            'ditolak'  => Pendaftaran::where('status', 'di terima')->count(),
        ];
        return view('home', $data);
    }
}
