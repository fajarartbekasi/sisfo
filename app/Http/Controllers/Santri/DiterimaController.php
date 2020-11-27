<?php

namespace App\Http\Controllers\Santri;


use PDF;
use Carbon\Carbon;
use App\Pendaftaran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiterimaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $diterimas = Pendaftaran::where('status', 'di terima')->paginate(5);

        return view('Data.Santri.diterima.index', compact('diterimas'));
    }

    public function periode(Request $request)
    {
        if ($request->has('tgl_awal')) {
            $pendaftaran = Pendaftaran::whereBetween('created_at', [request('tgl_awal'), request('tgl_akhir')])
                                    ->get();
        }
        $pdf = PDF::loadView('laporan.santri.diterima', compact('pendaftaran'))->setPaper('a4', 'landscape');

        return $pdf->stream('rekap_periode.pdf');
    }
    public function rekap()
    {
        $pendaftarans = Pendaftaran::where('status','di terima')->get();

        $pdf = PDF::loadView('laporan.santri.rekap', compact('pendaftarans'))->setPaper('a4', 'landscape');

        return $pdf->stream('rekap_santri_diterima.pdf');
    }
}
