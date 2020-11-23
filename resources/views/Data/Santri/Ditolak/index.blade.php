@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" aria-current="page">Home</li>
    <li class="breadcrumb-item active" aria-current="page">Data Santri</li>
    <li class="breadcrumb-item active" aria-current="page">Ditolak</li>
  </ol>
</nav>

<div class="card">
    <div class="card-body">
        <div>
            <div class="alert alert-primary" role="alert">
                <div class="d-flex justify-content-between">
                    <div>
                        Data Santri yang telah ditolak
                    </div>

                </div>
            </div>
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
                    @foreach($ditolaks as $pendaftaran)
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
                               <a href="http://" class="btn btn-outline-info btn-sm">Print</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div>
                {{$ditolaks->links()}}
            </div>
        </div>
    </div>
</div>
@endsection