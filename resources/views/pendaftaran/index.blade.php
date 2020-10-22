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
        </div>
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode Pendaftaran</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>T.T.L</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>dasdasd213412</td>
                        <td>John Doe</td>
                        <td>Laki - Laki</td>
                        <td>Bekasi, 21-21-20</td>
                        <td>
                            <form action="" method="post">
                                <a href="http://" class="btn btn-outline-info btn-sm">Edit</a>
                                <button class="btn btn-outline-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection