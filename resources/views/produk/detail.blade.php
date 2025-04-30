@extends('layouts.frontend')

@section('title', $product->name)

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">{{ $product->name }}</h1>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/' . $product->image) }}" class="img-fluid rounded shadow-sm" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <h3>Rp {{ number_format($product->price, 0, ',', '.') }}</h3>
            <p>Stok: {{ $product->stock }}</p>
            <p>{{ $product->description ?? 'Deskripsi tidak tersedia.' }}</p>
        </div>
    </div>

    {{-- Review Section --}}
    <div class="mt-5">
        <h2 class="mb-4">Review Produk</h2>
        @auth
        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <div class="mb-3">
                <label for="review" class="form-label">Tulis Review</label>
                <textarea name="review" id="review" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <select name="rating" id="rating" class="form-control" required>
                    <option value="1">1 - Sangat Buruk</option>
                    <option value="2">2 - Buruk</option>
                    <option value="3">3 - Cukup</option>
                    <option value="4">4 - Baik</option>
                    <option value="5">5 - Sangat Baik</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Review</button>
        </form>
        @else
        <p>Silakan <a href="{{ route('login') }}">login</a> untuk memberikan review.</p>
        @endauth

        {{-- Display Reviews --}}
        <div class="mt-5">
            <h3>Review Pengguna</h3>
            @forelse ($product->reviews as $review)
                <div class="mb-3">
                    <strong>{{ $review->user->name }}</strong> ({{ $review->rating }}/5)
                    <p>{{ $review->review }}</p>
                </div>
            @empty
                <p>Belum ada review untuk produk ini.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
