@extends('layouts.admin')

@section('title', 'Edit Produk')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4 text-primary" style="font-family: 'Poppins', sans-serif; font-weight: bold;">Edit Produk</h1>
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="p-4 rounded shadow-lg" style="background: linear-gradient(135deg, #1e3a8a, #3b82f6); color: white; animation: fadeIn 1.5s;">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required style="background-color: #1e40af; color: white; border: none;">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipe Produk</label>
            <select name="type" id="type" class="form-control" required style="background-color: #1e40af; color: white; border: none;">
                <option value="Merchandise" {{ $product->type == 'Merchandise' ? 'selected' : '' }}>Merchandise</option>
                <option value="Food" {{ $product->type == 'Food' ? 'selected' : '' }}>Makanan</option>
                <option value="Drink" {{ $product->type == 'Drink' ? 'selected' : '' }}>Minuman</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" required style="background-color: #1e40af; color: white; border: none;">
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stok</label>
            <input type="number" name="stock" id="stock" class="form-control" value="{{ $product->stock }}" required style="background-color: #1e40af; color: white; border: none;">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="4" required style="background-color: #1e40af; color: white; border: none;">{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk</label>
            <input type="file" name="image" id="image" class="form-control" style="background-color: #1e40af; color: white; border: none;">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100" class="mt-2 rounded" style="border: 2px solid #3b82f6;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary w-100" style="background-color: #2563eb; border: none; font-weight: bold; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">Simpan Perubahan</button>
    </form>
</div>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endsection
