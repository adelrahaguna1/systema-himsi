@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Admin Dashboard</h1>
    <p class="text-center">Selamat datang di panel admin Systema HIMSI. Gunakan menu di atas untuk mengelola produk dan data lainnya.</p>

    {{-- ================================== --}}
    {{--        STATISTICS SECTION          --}}
    {{-- ================================== --}}
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Produk</h5>
                    <p class="card-text fs-4">{{ \App\Models\Produk::count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Kategori Produk</h5>
                    <p class="card-text fs-4">3</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Pengguna</h5>
                    <p class="card-text fs-4">{{ \App\Models\User::count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
