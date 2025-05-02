@extends('layouts.frontend')

@section('title', 'Produk Makanan')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Produk Makanan</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($produk as $item)
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/default-product.png') }}" class="card-img-top" alt="{{ $item->name }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text"><strong>Rp {{ number_format($item->price, 0, ',', '.') }}</strong></p>
                        <p class="card-text">{{ $item->description }}</p>
                        <p class="card-text">Stok: {{ $item->stock }}</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Tambahkan</a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Tidak ada produk makanan.</p>
        @endforelse
    </div>

    {{-- Pagination Links --}}
    <div class="mt-4 d-flex justify-content-center">
        {{ $produk->links() }}
    </div>
</div>
@endsection
