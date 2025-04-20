<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Panel - @yield('title', 'Systema HIMSI')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <link href="{{ asset('css/admin_custom.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="admin-app">
        {{-- Navbar Admin Sederhana --}}
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{-- Mengarahkan brand ke dashboard admin --}}
                <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                    Admin Systema HIMSI
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="adminNavbar">
                    <ul class="navbar-nav ms-auto">
                         {{-- Link ke Dashboard Admin --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </li>
                        {{-- Link ke Manajemen Produk (Diperbaiki) --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.products.index') }}">Manajemen Produk</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form-admin').submit();">
                                Logout
                            </a>
                            <form id="logout-form-admin" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                         </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- Konten Utama Admin --}}
        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- Custom Admin JS (Opsional) --}}
    {{-- <script src="{{ asset('js/admin_custom.js') }}"></script> --}}
    {{-- Stack untuk script spesifik halaman --}}
    @stack('scripts')
</body>
</html>
