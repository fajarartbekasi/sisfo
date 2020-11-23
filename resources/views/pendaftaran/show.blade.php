@extends('layouts.app')


@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card border-0">
            <div class="card-body">
                <div class="alert alert-warning mb-3" role="alert">
                    <h3 class="">Detail informasi calon santri</h3>
                </div>
                <div class="d-flex justify-content-center pt-3 align-items-center">
                    <img src="{{asset('banner/masjid.png')}}" width="80"  alt="">
                    <div class="text-center ml-3">
                        <h5>Taman Pendidikan Al-Qur'An</h5>
                        <h5>Masjid Ziyaadaturrahman Jatimulya Bekasi</h5>
                    </div>
                </div>
                <form action="{{route('pendaftaran.update', $pendaftaran->id)}}" method="post" class="pt-3">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="text" name="no_pendaftaran" class="form-control border-0" value="{{$pendaftaran->no_pendaftaran}}" readonly id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="pilihan_masuk" class="form-control " value="{{$pendaftaran->pilihan_masuk}}"id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control " value="{{$pendaftaran->nama}}"id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="jenis_kelamin" class="form-control " value="{{$pendaftaran->jenis_kelamin}}"id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="kelas" class="form-control " value="{{$pendaftaran->kelas}}"id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="jumlah_sodara" class="form-control " value="{{$pendaftaran->jumlah_sodara}}"id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="alamat" class="form-control " value="{{$pendaftaran->alamat}}"id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="ayah" class="form-control " value="{{$pendaftaran->ayah}}"id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="ibu" class="form-control " value="{{$pendaftaran->ibu}}"id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="pekerjaan_ibu" class="form-control " value="{{$pendaftaran->pekerjaan_ibu}}"id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="pekerjaan_ayah" class="form-control " value="{{$pendaftaran->pekerjaan_ayah}}"id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="alamat_orangtua" class="form-control " value="{{$pendaftaran->alamat_orangtua}}"id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="no_telp" class="form-control " value="{{$pendaftaran->no_telp}}"id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="status" class="form-control " value="{{$pendaftaran->status}}"id="">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection