@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-warning text-center" role="alert">
                        <h3>FORMULIR PENDAFTARAN</h3>
                        PENERIMAAN SANTRI BARU PONDOK PESANTREN Ziyaadaturrahman
                    </div>

                    <form action="{{route('pendaftaran.store')}}" method="post">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="" class="mr-3">Pilihan Masuk Di PP. </label>
                            <select name="pilihan_masuk" id="" class="form-control">
                                <option value="Santri Tidak Mampu">Santri Tidak Mampu</option>
                                <option value="Santri Biasa">Santri Biasa</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki - Laki">Laki - Laki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kelas</label>
                            <select name="kelas" id="" class="form-control">
                                <option value="">Pilih Kelas</option>
                                <option value="Pagi">Pagi</option>
                                <option value="Sore">Sore</option>
                                <option value="Malam">Malam</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Sodara</label>
                            <input type="number" name="jumlah_sodara" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Lengkap</label>
                            <textarea class="form-control" name="alamat" id="">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Orang Tua</label>
                            <input type="text" name="ayah" class="form-control mb-2" id="" placeholder="Ayah">
                            <input type="text" name="ibu" class="form-control" id="" placeholder="Ibu">
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan Orang Tua</label>
                            <input type="text" name="pekerjaan_ayah" class="form-control mb-2" id="" placeholder="Ayah">
                            <input type="text" name="pekerjaan_ibu" class="form-control" id="" placeholder="Ibu">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Orang Tua</label>
                            <textarea class="form-control" name="alamat_orangtua" id="">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">E-Mail</label>
                            <input type="email" name="email" id="" class="form-control">
                        </div>
                        <div class="alert alert-info">
                            <h3>Perincian Pembayaran</h3>
                            <table class="table table-striped border-0">
                                <tbody>
                                    <tr>
                                        <td>Biaya Masuk </td>
                                        <td>Rp. 30.000 </td>
                                    </tr>
                                    <tr>
                                        <td>Biaya Spp / Bulan </td>
                                        <td>Rp. 0 (Bagi Santri tidak mampu) - Rp. 15.000 (Bagi santri biasa) </td>
                                    </tr>
                                    <tr>
                                        <td>Biaya Buku pedoman santri </td>
                                        <td>Rp. 5000</td>
                                    </tr>
                                    <tr>
                                        <td>Kartu Prestasi </td>
                                        <td>Rp. 2000</td>
                                    </tr>
                                    <tr>
                                        <td>Total </td>
                                        <td>Rp. 15.000 (Bagi Santri Yang tidak mampu) - Rp. 50.000 (Bagi Santri biasa)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <input type="hidden" name="status" value="daftar" class="form-control" >
                        <div class="mb-2">
                            <button class="btn btn-outline-info">Simpan Pendaftaran</button>
                            <a href="{{route('welcome')}}" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection