@extends('layouts.welcome')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <h3>Kegiatan Masjid Ziyaadaturahman</h3>
                        <div class="row">
                            @foreach($kegiatans as $kegiatan)
                            <div class="col-md-4">
                                <div class="card border-0">
                                    <img src="{{ url('storage/'. $kegiatan->images) }}" class="card-img-top" alt="" srcset="">
                                    <div class="card-body">
                                        <h3>{{$kegiatan->judul}}</h3>
                                        <div class="d-flex justify-content-between">
                                            <h6>{{$kegiatan->tanggal_kegiatan}}</h6>
                                            <h6>{{$kegiatan->jam}}</h6>
                                        </div>
                                        <h4 class="pt-3 pb-3">{{$kegiatan->pengisi_materi}}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection