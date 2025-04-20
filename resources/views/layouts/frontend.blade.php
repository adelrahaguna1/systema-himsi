<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Systema HIMSI')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" integrity="sha384-1FRXOD9r5k0X9z3X9z3X9z3X9z3X9z3X9z3X9z3X9z3X9z3X9z3X9z3X9z3X9z3X9z3X9z3" crossorigin="anonymous">

    <style>
        body {
            background-color: #f0f8ff; /* Warna biru muda untuk latar belakang */
            color: #000000; /* Warna teks utama */
        }

        .navbar {
            background-color: #007bff; /* Warna biru untuk navbar */
        }

        .navbar-brand {
            font-weight: bold;
            color: #fff !important; /* Warna putih untuk teks navbar */
        }

        .footer {
            background-color: #014288; /* Warna biru gelap untuk footer */
            color: #f8f9fa; /* Warna putih untuk teks footer */
        }

        .footer h5 {
            color: #ffc107; /* Warna kuning untuk judul di footer */
        }

        .footer a {
            color: #f8f9fa; /* Warna putih untuk link di footer */
        }

        .footer a:hover {
            color: #ffc107; /* Warna kuning saat hover link di footer */
        }

        .footer hr {
            border-top: 1px solid #f8f9fa; /* Garis pemisah di footer */
        }

        .footer .social-icons a {
            color: #000000; /* Warna putih untuk ikon sosial media */
            margin-right: 15px;
        }

        .footer .social-icons a:hover {
            color: #ffc107; /* Warna kuning saat hover ikon sosial media */
        }
    </style>
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/HIMSI LOGO.png') }}" height="50" class="me-1">
                SYSTEMA HIMSI
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="produkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Produk
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="produkDropdown">
                        <li><a class="dropdown-item" href="#">Merchandise</a></li>
                        <li><a class="dropdown-item" href="#">Makanan</a></li>
                        <li><a class="dropdown-item" href="#">Minuman</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-primary fw-bold" href="{{ route('login') }}" style="color: #ffffff !important;">Login</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </div>
                    </li>
                @endguest
                </ul>
            </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer pt-5 pb-4 mt-5">
            <div class="container text-md-left">
                <div class="row text-md-left">
                    <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 fw-bold">
                            <img src="{{ asset('images/HIMSI LOGO.png') }}" height="50" class="me-1">
                            Systema HIMSI
                        </h5>
                        <p>
                            Platform resmi Himpunan Mahasiswa Sistem Informasi untuk memenuhi kebutuhan merchandise, makanan, dan minuman Anda.
                        </p>
                        <p>
                            Jl. Minangkabau Barat No.50, RT.1/RW.1, Ps. Manggis, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12970
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 fw-bold">Produk</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none">Merchandise</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none">Makanan</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none">Minuman</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 fw-bold">Navigasi</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none">Tentang Kami</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none">Kontak</a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('login') }}" class="text-decoration-none">Login Member</a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('register') }}" class="text-decoration-none">Register Member</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 fw-bold">Hubungi Kami</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <a href="mailto:himsitelu.jkt@gmail.com" class="text-decoration-none">
                                    <img src="{{ asset('images/Email.png') }}" alt="Email" height="25" class="me-2">
                                    himsitelu.jkt@gmail.com
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="https://www.instagram.com/himsi_telujkt?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-decoration-none">
                                    <img src="{{ asset('images/Instagram.png') }}" alt="Instagram" height="25" class="me-2">
                                    Instagram/himsi_telujkt
                                </a>
                            </li>
                        </ul>
                    </div>

                    <hr class="mb-4 mt-4">

                    <div class="row align-items-center">
                        <div class="col-md-7 col-lg-8">
                            <p class="text-center text-md-start">
                                Copyright &copy; {{ date('Y') }}
                                <a href="{{ url('/') }}" class="text-decoration-none">
                                    <strong>Systema HIMSI</strong>
                                </a>. All Rights Reserved.
                            </p>
                        </div>
                        <div class="col-md-5 col-lg-4">
                            <div class="text-center text-md-end"></div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
