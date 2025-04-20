{{-- Menggunakan layout admin --}}
@extends('layouts.admin')

{{-- Judul Halaman --}}
@section('title', 'Manajemen Produk')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Produk</h1>

    {{-- Tombol Tambah Produk Baru (Nama rute diperbaiki) --}}
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah Produk Baru
    </a>

    {{-- Alert jika ada session message --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('error')) {{-- Tambahkan juga untuk error --}}
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    {{-- Tabel Daftar Produk --}}
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Loop data produk --}}
                        @forelse ($products as $product)
                            <tr>
                                <th scope="row">{{ $loop->iteration + $products->firstItem() - 1 }}</th>
                                <td>
                                    @if ($product->image)
                                        {{-- Pastikan storage link sudah dibuat: php artisan storage:link --}}
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="50" height="50" style="object-fit: cover;">
                                    @else
                                        <img src="{{ asset('images/placeholder-thumb.png') }}" alt="No image" width="50" height="50" style="object-fit: cover;">
                                    @endif
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ ucfirst($product->type) }}</td>
                                <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>
                                    {{-- Tombol Edit (Nama rute diperbaiki) --}}
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-warning me-1" title="Edit">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>

                                    {{-- Tombol Hapus (Nama rute diperbaiki) --}}
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus produk \'{{ $product->name }}\'?')">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Belum ada data produk.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Link Paginasi --}}
            <div class="mt-3">
                {{ $products->links() }}
            </div>

        </div> {{-- End card-body --}}
    </div> {{-- End card --}}
</div> {{-- End container --}}
@endsection

{{-- Tambahkan @push('scripts') jika perlu JS spesifik halaman --}}
{{-- @push('scripts')
<script>
    // Contoh JS
    console.log('Halaman daftar produk dimuat.');
</script>
@endpush --}}

{{-- Tambahkan Font Awesome jika belum ada di layout admin --}}
{{-- Pastikan di layouts/admin.blade.php ada link Font Awesome di <head> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
