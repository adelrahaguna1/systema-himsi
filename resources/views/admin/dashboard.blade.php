@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Admin Dashboard</h1>
    <p class="text-center">Selamat datang di panel admin Systema HIMSI.</p>
    <div class="text-center mt-3">
        <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Kelola Produk</a>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Total Produk</h5>
                    <p class="card-text">{{ \App\Models\Produk::count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Kategori Produk</h5>
                    <p class="card-text">3</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Pengguna</h5>
                    <p class="card-text">{{ \App\Models\User::count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
    }
    .card-title {
        font-weight: bold;
    }
</style>
@endsection
