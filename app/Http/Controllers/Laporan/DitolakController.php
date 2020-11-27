<?php

namespace App\Http\Controllers\Laporan;

use PDF;
use App\Pendaftaran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DitolakController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $ditolaks = Pendaftaran::where('status', 'di tolak')->paginate(5);

        return view('Data.Santri.ditolak.index', compact('ditolaks'));
    }

    public function periode(Request $request)
    {
        if ($request->has('tgl_awal')) {
            $pendaftaran = Pendaftaran::whereBetween('created_at', [request('tgl_awal'), request('tgl_akhir')])
                                    ->get();
        }
        $pdf = PDF::loadView('laporan.santri.ditolak.ditolak', compact('pendaftaran'))->setPaper('a4', 'landscape');

        return $pdf->stream('rekap_periode.pdf');
    }
    public function rekap()
    {
        $pendaftarans = Pendaftaran::where('status','di tolak')->get();

        $pdf = PDF::loadView('laporan.santri.rekap', compact('pendaftarans'))->setPaper('a4', 'landscape');

        return $pdf->stream('rekap_santri_diterima.pdf');
    }
}
