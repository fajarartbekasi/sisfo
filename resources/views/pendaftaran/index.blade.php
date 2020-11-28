@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" aria-current="page">Home</li>
    <li class="breadcrumb-item active" aria-current="page">Pendaftaran</li>
  </ol>
</nav>

<div class="card">
    <div class="card-body">
        <div>
            <div class="alert alert-primary" role="alert">
                <div class="d-flex justify-content-between">
                    <div>
                        Silahkan Cek Data pendaftaran dibawah ini, terimakasih.
                    </div>
                    <div>
                        <a href="{{route('pendaftaran.create')}}" class="btn btn-outline-info ">Tambah Pendaftaran</a>
                    </div>
                </div>
            </div>
            <div class="pt-4 mb-4">
                <a href="{{route('rekap.laporan-pendaftaran')}}" class="btn btn-info">Rekap Laporan</a>
            </div>
        </div>
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode Pendaftaran</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tgl Daftar</th>
                        <th>Status</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendaftarans as $pendaftaran)
                        <tr>
                            <td>{{$pendaftaran->no_pendaftaran}}</td>
                            <td>{{$pendaftaran->nama}}</td>
                            <td>{{$pendaftaran->jenis_kelamin}}</td>
                            <td>{{$pendaftaran->created_at->toDateString()}}</td>
                            <td>
                                <span class="badge badge-pill badge-info">
                                    {{$pendaftaran->status}}
                                </span>
                            </td>
                            <td>
                                <form action="" method="post">
                                    <a href="{{route('pendaftaran.show', $pendaftaran->id)}}" class="btn btn-outline-info btn-sm">Detail</a>
                                    <button class="btn btn-outline-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$pendaftarans->links()}}
        </div>
    </div>
</div>
@endsection