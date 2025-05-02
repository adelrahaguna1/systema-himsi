<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Panel - Systema HIMSI')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background: rgba(0, 0, 50, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 2px solid #2a5298;
        }

        .navbar-brand {
            font-size: 1.5rem;
            color: #00d4ff !important;
            text-shadow: 0 0 10px #00d4ff;
        }

        .nav-link {
            color: #ffffff !important;
            transition: color 0.3s ease-in-out;
        }

        .nav-link:hover {
            color: #00d4ff !important;
        }

        .alert {
            background: rgba(0, 255, 255, 0.1);
            border: 1px solid #00d4ff;
            color: #00d4ff;
        }

        footer {
            background: rgba(0, 0, 50, 0.9);
            border-top: 2px solid #2a5298;
        }

        footer p {
            color: #00d4ff;
            text-shadow: 0 0 5px #00d4ff;
        }

        .container {
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-close {
            filter: brightness(0) invert(1);
        }

        .btn-close:hover {
            filter: brightness(0.5) invert(1);
        }
    </style>
</head>
<body>
    <div id="app">
        {{-- Admin Navbar --}}
        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ route('admin.dashboard') }}">
                    Admin Panel - Systema HIMSI
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Dashboard Utama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.products.index') }}">Kelola Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>

        {{-- Admin Footer --}}
        <footer class="footer py-3 mt-auto">
            <div class="container text-center">
                <p class="mb-0 small">Copyright &copy; {{ date('Y') }} Systema HIMSI. All Rights Reserved.</p>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
