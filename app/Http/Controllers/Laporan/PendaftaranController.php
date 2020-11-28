<?php

namespace App\Http\Controllers\Laporan;

use PDF;
use App\Pendaftaran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function rekap()
    {
        $pendaftarans = Pendaftaran::where('status', 'daftar')->get();

        $pdf = PDF::loadView('laporan.pendaftaran.rekap', compact('pendaftarans'))->setPaper('a4', 'landscape');

        return $pdf->stream('rekap_laporan_pendaftaran.pdf');
    }
}
