<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body stylesheet="padding-top: 3.5rem;">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-teal-600">
            <a class="navbar-brand" href="#">TPQ Masjid Ziyaadaturrahman</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('welcome')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('pendaftaran.create')}}">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('cek-kegiatan')}}">Kegiatan</a>
                    </li>
                </ul>
                <div class="d-flex">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}" class="text-white">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-outline-info mr-2">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-outline-warning">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </nav>
        <main role="main" class="mb-3">
            <div class="jumbotron" style="background-image: url('banner/tpq.jpg'); background-size: 99%;">
                <div class="container">
                    <h1 class="display-3 text-white">Hello, </h1>
                    <p class="text-white">
                        Selamat datang di website resmi TPQ Masjid Ziyaadaturrahman
                    </p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
                </div>
            </div>
            @yield('content')
        </main>
        <footer class="footer mt-auto py-3">
            <div class="container">
                <span>© 2020 Youre Name. All Rights Reserved.</span>
            </div>
        </footer>

    </body>
</html>
