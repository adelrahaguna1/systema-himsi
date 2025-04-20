{{-- Menggunakan layout admin --}}
@extends('layouts.admin')

@section('title', 'Tambah Produk Baru')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Produk Baru</h1>

    <div class="card">
        <div class="card-body">
            {{-- Form mengarah ke route admin.products.store dengan method POST --}}
            {{-- enctype="multipart/form-data" WAJIB untuk upload file/gambar --}}
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf {{-- Token Keamanan Laravel --}}

                {{-- Input Nama Produk --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Produk <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    {{-- Menampilkan error validasi untuk 'name' --}}
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Input Deskripsi --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Input Harga --}}
                <div class="mb-3">
                    <label for="price" class="form-label">Harga (Rp) <span class="text-danger">*</span></label>
                    {{-- step="any" atau step="0.01" jika perlu desimal, type="number" untuk input angka --}}
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}" required>
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Input Tipe Produk --}}
                <div class="mb-3">
                    <label for="type" class="form-label">Tipe Produk <span class="text-danger">*</span></label>
                    <select class="form-select @error('type') is-invalid @enderror" id="type" name="type" required>
                        <option value="" disabled {{ old('type') ? '' : 'selected' }}>-- Pilih Tipe --</option>
                        <option value="merchandise" {{ old('type') == 'merchandise' ? 'selected' : '' }}>Merchandise</option>
                        <option value="food" {{ old('type') == 'food' ? 'selected' : '' }}>Makanan</option>
                        <option value="drink" {{ old('type') == 'drink' ? 'selected' : '' }}>Minuman</option>
                    </select>
                     @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                 {{-- Input Stok --}}
                 <div class="mb-3">
                    <label for="stock" class="form-label">Stok <span class="text-danger">*</span></label>
                    <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ old('stock', 0) }}" required min="0"> {{-- Default 0, minimal 0 --}}
                    @error('stock')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Input Gambar --}}
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Produk</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                    <div id="imageHelp" class="form-text">Opsional. Format: JPG, PNG, JPEG. Maks: 2MB.</div>
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Tombol Submit dan Batal --}}
                <div class="d-flex justify-content-end">
                     <a href="{{ route('admin.products.index') }}" class="btn btn-secondary me-2">Batal</a>
                     <button type="submit" class="btn btn-primary">Simpan Produk</button>
                </div>

            </form>
        </div> {{-- End card-body --}}
    </div> {{-- End card --}}
</div> {{-- End container --}}
@endsection
