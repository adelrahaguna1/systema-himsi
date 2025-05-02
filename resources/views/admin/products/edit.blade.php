@extends('layouts.admin')

@section('title', 'Edit Produk')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white text-center">
            <h1 class="mb-0">Edit Produk</h1>
        </div>
        <div class="card-body bg-light">
            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Produk</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipe Produk</label>
                    <select name="type" id="type" class="form-control" required>
                        <option value="Merchandise" {{ $product->type == 'Merchandise' ? 'selected' : '' }}>Merchandise</option>
                        <option value="Food" {{ $product->type == 'Food' ? 'selected' : '' }}>Makanan</option>
                        <option value="Drink" {{ $product->type == 'Drink' ? 'selected' : '' }}>Minuman</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stok</label>
                    <input type="number" name="stock" id="stock" class="form-control" value="{{ $product->stock }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required>{{ $product->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Produk</label>
                    <input type="file" name="image" id="image" class="form-control">
                    @if ($product->image)
                        <div class="mt-3">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-thumbnail" width="150">
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection
