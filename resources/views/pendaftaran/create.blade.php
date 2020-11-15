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

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="" class="mr-3">Pilihan Masuk Di PP. </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Santri Tidak Mampu</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Santri Biasa</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Nomor Pendaftaran</label>
                            <input type="text" name="" class="form-control" disabled id="">
                        </div>

                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="">Perempuan</option>
                                <option value="">Laki - Laki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kelas</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Kelas</option>
                                <option value="">Pagi</option>
                                <option value="">Sore</option>
                                <option value="">Malam</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Sodara</label>
                            <input type="number" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Lengkap</label>
                            <textarea class="form-control" name="" id="">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Orang Tua</label>
                            <input type="text" name="" class="form-control mb-2" id="" placeholder="Ayah">
                            <input type="text" name="" class="form-control" id="" placeholder="Ibu">
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan Orang Tua</label>
                            <input type="text" name="" class="form-control mb-2" id="" placeholder="Ayah">
                            <input type="text" name="" class="form-control" id="" placeholder="Ibu">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Orang Tua</label>
                            <textarea class="form-control" name="" id="">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">E-mail</label>
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
                                        <td>Rp. 10.000 (Bagi Santri tidak mampu) - Rp. 15.000 (Bagi santri biasa) </td>
                                    </tr>
                                    <tr>
                                        <td>Biaya Buku pedoman santri </td>
                                        <td>Rp. 5000</td>
                                    </tr>
                                    <tr>
                                        <td>Total </td>
                                        <td>Rp. 15.000 (Bagi Santri Yang tidak mampu) - Rp. 50.000 (Bagi Santri biasa)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="mb-2">
                            <button class="btn btn-outline-info">Simpan Pendaftaran</button>
                            <a href="{{route('pendaftaran')}}" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection