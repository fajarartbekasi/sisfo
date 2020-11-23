@extends('layouts.app')

@section('content')

    <div class="card border-0">
        <div class="card-body">
            <h3>Form Tambah Kegiatan</h3>
            <form action="{{route('kegiatan.update', $kegiatan->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif
                <div class="form-group">
                    <label for="">Judul kegiatan</label>
                    <input type="text" name="judul" class="form-control" value="{{$kegiatan->judul}}" id="">
                </div>
                <div class="form-group">
                    <label for="">Pengisi Materi</label>
                    <input type="text" name="pengisi_materi" class="form-control" value="{{$kegiatan->pengisi_materi}}" id="">
                </div>
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal_kegiatan" class="form-control" value="{{$kegiatan->tanggal_kegiatan}}" id="">
                </div>
                <div class="form-group">
                    <label for="">Waktu kegiatan</label>
                    <input type="text" name="jam" class="form-control" value="{{$kegiatan->jam}}" id="">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" name="status" class="form-control" value="{{$kegiatan->status}}" id="">
                </div>
                <div class="form-group">
                    <label for="">Banner</label>
                    <input type="file" name="images" class="form-control" value="{{$kegiatan->images}}" id="">
                </div>
                <div>
                    <button class="btn btn-outline-success">Simpan Kegiatan</button>
                </div>
            </form>
        </div>
    </div>

@endsection