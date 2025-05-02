@extends('layouts.admin')

@section('title', 'Kelola Produk')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4 text-primary" style="font-family: 'Poppins', sans-serif; font-weight: bold;">Kelola Produk</h1>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3" style="background: linear-gradient(90deg, #007bff, #0056b3); border: none; transition: all 0.3s ease-in-out;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">Tambah Produk</a>
    <table class="table table-bordered table-hover" style="background-color: #f8f9fa; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <thead class="bg-primary text-white" style="font-family: 'Poppins', sans-serif;">
            <tr>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr style="transition: all 0.3s ease-in-out;" onmouseover="this.style.backgroundColor='#e3f2fd'" onmouseout="this.style.backgroundColor='white'">
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->type }}</td>
                    <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="50" style="border-radius: 5px; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning btn-sm" style="transition: all 0.3s ease-in-out;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" style="transition: all 0.3s ease-in-out;" onclick="return confirm('Yakin ingin menghapus produk ini?')" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    body {
        background: linear-gradient(120deg, #007bff, #ffffff);
        color: #fff;
        font-family: 'Poppins', sans-serif;
    }
    .table-hover tbody tr:hover {
        background-color: #e3f2fd !important;
    }
</style>
@endsection
