@extends('layouts.admin')

@section('title', 'Tambah Produk Baru')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Tambah Produk Baru</h1>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipe Produk</label>
            <select name="type" id="type" class="form-control" required>
                <option value="merchandise">Merchandise</option>
                <option value="food">Makanan</option>
                <option value="drink">Minuman</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stok</label>
            <input type="number" name="stock" id="stock" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
