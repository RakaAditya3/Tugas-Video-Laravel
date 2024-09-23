<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Restaurant</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
        <div class="container">
            <div class="mt-2">
                <nav class="navbar navbar-expand-lg bg-white">
                    <div class="container-fluid">
                        <a href="/"><img style="width: 150px" src="{{ asset('gambar/HaTaku.png') }}" alt=""></a>
                        <ul class="navbar-nav gap-5">
                            @if (session()->has('cart'))
                            <li class="nav-item"> <a href="{{ url('cart') }}">Cart ({{ count(session('cart')) }})</a></li>
                        @else
                            <li class="nav-item">Cart (0)</li>
                        @endif

                            @if (session()->missing('idpelanggan'))
                            <li class="nav-item"><a class="text-danger" style="text-decoration: none;" href="{{ url('register') }}">Register</a></li>
                            <li class="nav-item"><a class="text-danger" style="text-decoration: none;" href="{{ url('login') }}">Login</a></li>
                            @endif

                                @if (session()->has('idpelanggan'))
                                <li class="nav-item"> {{ session('idpelanggan')['email'] }}  </li>
                                <li class="nav-item"><a class="text-danger" style="text-decoration: none;" href="{{ url('logout')  }}">Logout</a></li>
                                @endif
                            
                            
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row mt-2">
                <div class="col-2">
                    <ul class="list-group">
                        @foreach ($kategoris as $kategori )
                            <li class="list-group-item"><a class="text-danger" style="text-decoration: none;" href="{{ url('show/'. $kategori->idkategori) }}">{{ $kategori -> kategori }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-10">
                    @yield('content')
                </div>
            </div>
            <div class="bg-light">
                <p class="text-center"> CopyRight Hataku 2024</p>
            </div>
        </div>

        <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>