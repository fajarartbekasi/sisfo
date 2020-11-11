@extends('layouts.app')

@section('content')

    <div class="card border-0">
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Tanggal kegiatan</label>
                    <input type="date" name="tgl_kegiatan" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Nama kegiatan</label>
                    <input type="text" name="nama_kegiatan" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Pengisi materi</label>
                    <input type="text" name="pengisi_materi" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Waktu kegiatan</label>
                    <input type="time" name="waktu_kegiatan" class="form-control" id="">
                </div>
            </form>
        </div>
    </div>

@endsection