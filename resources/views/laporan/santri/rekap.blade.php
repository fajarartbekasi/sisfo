@extends('layouts.cetak')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <P>
                <b>
                    <h3>PONDOK PESANTREN
                        <br>
                        MASJID ZIAADATURAHMAN
                        <br>
                        Alamat Belum
                    </h3>
                    <hr>
                    <br>
            </P>
        </div>
        <u>
            <h4>Rekap laporan santri diterima</h4>
        </u>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Pendaftaran</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pendaftarans as $diterima)
                    <tr>
                        <td>{{$diterima->no_pendaftaran}}</td>
                        <td>{{$diterima->nama}}</td>
                        <td>{{$diterima->jenis_kelamin}}</td>
                        <td>
                            <span class="badge badge-pill badge-info">
                                {{$diterima->status}}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection