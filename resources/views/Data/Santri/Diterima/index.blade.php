@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" aria-current="page">Home</li>
    <li class="breadcrumb-item active" aria-current="page">Data Santri</li>
    <li class="breadcrumb-item active" aria-current="page">Diterima</li>
  </ol>
</nav>

<div class="card">
    <div class="card-body">
        <div>
            <div class="alert alert-primary" role="alert">
                <div class="d-flex justify-content-between">
                    <div>
                        Data Santri yang telah diterima
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-4 mb-4">
            <form action="{{route('laporan-santri.diterima')}}" method="get">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Dari Tanggal</label>
                            <input type="date" name="tgl_awal" class="tm form-control" data-date-format="DD/MMM/YYYY" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Sampai Tanggal</label>
                            <input type="date" name="tgl_akhir" class="form-control" id="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-info">Cari Laporan</button>
                            <a href="{{route('rekap.laporan-santri.diterima')}}" class="btn btn-secondary">Rekap Laporan</a>
                        </div>

                    </div>
                </div>
            </form>
        </div>
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode Pendaftaran</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($diterimas as $pendaftaran)
                        <tr>
                            <td>{{$pendaftaran->no_pendaftaran}}</td>
                            <td>{{$pendaftaran->nama}}</td>
                            <td>{{$pendaftaran->jenis_kelamin}}</td>
                            <td>
                                <span class="badge badge-pill badge-info">
                                    {{$pendaftaran->status}}
                                </span>
                            </td>
                            <td>
                               <a href="{{route('laporan-santri.diterima')}}" class="btn btn-outline-info btn-sm">Print</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{$diterimas->links()}}
            </div>
        </div>
    </div>
</div>
@endsection