@extends('layouts.admin')

@section('title', 'Tambah Produk Baru')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white text-center">
            <h1 class="mb-0">Tambah Produk Baru</h1>
        </div>
        <div class="card-body bg-light">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Produk</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama produk" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipe Produk</label>
                    <select name="type" id="type" class="form-control" required>
                        <option value="Merchandise">Merchandise</option>
                        <option value="Food">Makanan</option>
                        <option value="Drink">Minuman</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" name="price" id="price" class="form-control" placeholder="Masukkan harga produk" required>
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stok</label>
                    <input type="number" name="stock" id="stock" class="form-control" placeholder="Masukkan jumlah stok" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea name="description" id="description" class="form-control" rows="4" placeholder="Masukkan deskripsi produk" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Produk</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-5">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
