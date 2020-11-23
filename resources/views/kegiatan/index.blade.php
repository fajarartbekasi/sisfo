@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h3>Data Kegiatan</h3>
                        <a href="{{route('kegiatan.create')}}" class="btn btn-info">Tambah Kegiatan</a>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Tanggal Kegiatan</th>
                                <th>Pemateri</th>
                                <th>Status</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kegiatans as $kegiatan)
                                <tr>
                                    <td>{{$kegiatan->judul}}</td>
                                    <td>{{$kegiatan->tanggal_kegiatan}}</td>
                                    <td>{{$kegiatan->pengisi_materi}}</td>
                                    <td>{{$kegiatan->status}}</td>
                                    <td>
                                        <form action="{{route('kegiatan.destroy', $kegiatan->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kegiatan.edit', $kegiatan->id)}}" class="btn btn-info btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div>
                        {{$kegiatans->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection