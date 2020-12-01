@extends('layouts.welcome')

@section('content')
<div class="container" style="margin-top: -90px;">
    <div class="row">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <h3>Kegiatan TPQ Masjid Ziyaadaturrahman</h3>
                    <p class="text-muted">pembaruan terakhir</p>
                    <div class="row">
                        @foreach($kegiatans as $kegiatan)
                            <div class="col-md-4">
                                <div class="card border-0">
                                    <img src="{{ url('storage/'. $kegiatan->images) }}" class="card-img-top" alt="" srcset="">
                                    <div class="card-body">
                                        <h3>{{$kegiatan->judul}}</h3>
                                        <div class="d-flex justify-content-between">
                                            <h6>{{$kegiatan->tanggal_kegiatan}}</h6>
                                            <h6>{{$kegiatan->jam}}</h6>
                                        </div>
                                        <h4 class="pt-3 pb-3">{{$kegiatan->pengisi_materi}}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-12">
                            <h3 class="text-center">JADWAL KHOTIB JUM'AT 2020</h3>
                            <h3 class="text-center">Masjid Ziyaadaturrahman Jatimulya Bekasi</h3>
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Khotib</th>
                                                <th>Telpon</th>
                                                <th>Alamat</th>
                                                <th>Tgl/Jum'at Ke</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="5">Januari</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ust.Drs. H Agus Salim, MAg</td>
                                                <td>082113576630</td>
                                                <td>Al Furqon</td>
                                                <td>03-01-2020 / I</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Ust.Drs. H Tb Saiful Rahman</td>
                                                <td>08158747340</td>
                                                <td>Mutiara Gading</td>
                                                <td>10-01-2020 / II</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Ust.H Slamet M. Abda</td>
                                                <td>081310583344</td>
                                                <td>Ziyaadaturrahman</td>
                                                <td>17-01-2020 / III</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Ust.A Rachmat</td>
                                                <td>087879022164</td>
                                                <td>Ziyaadaturrahman</td>
                                                <td>24-01-2020 / IV</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Ust. Fauzi Mukhlis</td>
                                                <td>081280239624</td>
                                                <td>Masjid Raya</td>
                                                <td>31-01-2020 / V</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-body">
                    <div>
                        <h3>Prosedur pendaftaran online</h3>
                        <ul>
                            <li>Akses situs</li>
                            <li>klik menu pendaftaran</li>
                            <li>masukan semua informasi dengan benar</li>
                            <li>Pada saat melakukan test, harap bawa bukti pembayaran</li>
                            
                            <li>informasi diterima dan tidak nya akan di infokan ke nomor handphone anda</li>
                            
                        </ul>
                    </div>
                    <div>
                        <h3>Pendaftaran secara offline</h3>
                        <li>Silahkan Datang ke alamat Jl.kecapi lll blok c perumahan jatimulya-bekasi 17515</li>
                        <li>Silahkan mengambil formulir dibagian pendaftaran</li>
                        <li>setelah mengisi informasi dan menyerahkan formulir</li>
                        <li>Dan membayar uang pendaftaran santri baru</li>
                        <li>melakukan test secara langsung</li>
                        <li>informasi diterima dan tidak nya akan di infokan ke nomor handphone anda</li>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection