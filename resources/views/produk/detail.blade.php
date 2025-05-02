@extends('layouts.frontend')

@section('content')
<div class="container">
    <h1 class="my-4 text-center">Detail Produk</h1>
    <div class="row justify-content-center">
        @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-img-top-wrapper" style="height: 200px; overflow: hidden;">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/default-product.png') }}" class="card-img-top" alt="{{ $product->name }}" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text mt-auto"><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    <p class="card-text"><strong>Stok:</strong> {{ $product->stock }}</p>
                    <a href="#" class="btn btn-primary mt-2">Beli Produk</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
