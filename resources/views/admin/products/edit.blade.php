@extends('layouts.admin')

@section('title', 'Edit Produk')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Produk</h1>
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
                <option value="merchandise" {{ $product->type == 'merchandise' ? 'selected' : '' }}>Merchandise</option>
                <option value="food" {{ $product->type == 'food' ? 'selected' : '' }}>Makanan</option>
                <option value="drink" {{ $product->type == 'drink' ? 'selected' : '' }}>Minuman</option>
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
            <label for="image" class="form-label">Gambar Produk</label>
            <input type="file" name="image" id="image" class="form-control">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100" class="mt-2">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
