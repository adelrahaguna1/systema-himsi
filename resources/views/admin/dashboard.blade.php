@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4 text-primary fw-bold">Admin Dashboard</h1>
    <p class="text-center text-white">Selamat datang di panel admin Systema HIMSI. Gunakan menu di atas untuk mengelola produk dan data lainnya.</p>

    {{-- ================================== --}}
    {{--        STATISTICS SECTION          --}}
    {{-- ================================== --}}
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card text-center shadow-lg border-0 bg-gradient-primary text-white animate__animated animate__fadeInUp">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Total Produk</h5>
                    <p class="card-text fs-4">{{ \App\Models\Produk::count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow-lg border-0 bg-gradient-info text-white animate__animated animate__fadeInUp animate__delay-1s">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Kategori Produk</h5>
                    <p class="card-text fs-4">3</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow-lg border-0 bg-gradient-secondary text-white animate__animated animate__fadeInUp animate__delay-2s">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Pengguna</h5>
                    <p class="card-text fs-4">{{ \App\Models\User::count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg, #007bff, #0056b3);
    }
    .bg-gradient-info {
        background: linear-gradient(135deg, #17a2b8, #0d6efd);
    }
    .bg-gradient-secondary {
        background: linear-gradient(135deg, #6c757d, #343a40);
    }
    .card {
        border-radius: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection
