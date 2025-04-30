@extends('layouts.frontend')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
<div class="container text-center mt-5">
    <h1 class="display-4 fw-bold text-danger">404</h1>
    <p class="lead">Maaf, halaman yang Anda cari tidak ditemukan.</p>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Kembali ke Beranda</a>
</div>
@endsection
