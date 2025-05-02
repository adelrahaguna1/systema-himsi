@extends('layouts.admin')

@section('title', 'Tambah Produk Baru')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4 futuristic-title">Tambah Produk Baru</h1>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="futuristic-form">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label futuristic-label">Nama Produk</label>
            <input type="text" name="name" id="name" class="form-control futuristic-input" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label futuristic-label">Tipe Produk</label>
            <select name="type" id="type" class="form-control futuristic-input" required>
                <option value="Merchandise">Merchandise</option>
                <option value="Food">Makanan</option>
                <option value="Drink">Minuman</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label futuristic-label">Harga</label>
            <input type="number" name="price" id="price" class="form-control futuristic-input" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label futuristic-label">Stok</label>
            <input type="number" name="stock" id="stock" class="form-control futuristic-input" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label futuristic-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control futuristic-input" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label futuristic-label">Gambar Produk</label>
            <input type="file" name="image" id="image" class="form-control futuristic-input">
        </div>
        <button type="submit" class="btn futuristic-button">Simpan</button>
    </form>
</div>

<style>
    body {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        color: #ffffff;
        font-family: 'Arial', sans-serif;
    }

    .futuristic-title {
        font-size: 2.5rem;
        color: #00d4ff;
        text-shadow: 0 0 10px #00d4ff, 0 0 20px #00d4ff;
        animation: glow 1.5s infinite alternate;
    }

    .futuristic-form {
        background: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(10px);
    }

    .futuristic-label {
        font-weight: bold;
        color: #00d4ff;
    }

    .futuristic-input {
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid #00d4ff;
        color: #ffffff;
        transition: all 0.3s ease;
    }

    .futuristic-input:focus {
        background: rgba(255, 255, 255, 0.3);
        box-shadow: 0 0 10px #00d4ff;
        outline: none;
    }

    .futuristic-button {
        background: #00d4ff;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px #00d4ff;
    }

    .futuristic-button:hover {
        background: #007acc;
        box-shadow: 0 0 20px #007acc;
    }

    @keyframes glow {
        from {
            text-shadow: 0 0 10px #00d4ff, 0 0 20px #00d4ff;
        }
        to {
            text-shadow: 0 0 20px #00d4ff, 0 0 30px #00d4ff;
        }
    }
</style>
@endsection
