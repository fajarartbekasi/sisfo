@extends('layouts.app')

@section('content')

    <div class="card border-0">
        <div class="card-body">
            <form action="{{route('kegiatan.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif
                <div class="form-group">
                    <label for="">Judul kegiatan</label>
                    <input type="text" name="judul" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Pengisi Materi</label>
                    <input type="text" name="pengisi_materi" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal_kegiatan" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Waktu kegiatan</label>
                    <input type="text" name="jam" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" name="status" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Banner</label>
                    <input type="file" name="images" class="form-control" id="">
                </div>
                <div>
                    <button class="btn btn-outline-success">Simpan Kegiatan</button>
                </div>
            </form>
        </div>
    </div>

@endsection