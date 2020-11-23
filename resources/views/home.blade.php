@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body">
                    <h3>Jumlah Santri Yang terdaftar</h3>
                    <div class="d-flex align-items-center">
                        <span class="mr-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <h1>50</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body">
                    <h3>Jumlah Santri Yang mendaftar</h3>
                    <div class="d-flex align-items-center">
                        <span class="mr-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <h1>50</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 pt-3">
            <div class="card border-0">
                <div class="card-body">
                    <h3 class="text-center">JADWAL KHOTIB JUM'AT 2020</h3>
                    <h3 class="text-center">Masjid Ziyaadaturrahman Jatimulya Bekasi</h3>
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
@endsection
