<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk; // Pastikan namespace ini ada

class ProdukController extends Controller
{
    public function merchandise()
    {
        // Ambil produk dengan type 'merchandise'
        $produk = Produk::where('type', 'merchandise')->get();

        // Kirim data ke view
        return view('produk.merchandise', compact('produk'));
    }

    public function makanan()
    {
        // Ambil produk dengan kategori 'makanan'
        $produk = Produk::where('type', 'makanan')->get();

        // Kirim data ke view
        return view('produk.makanan', compact('produk'));
    }

    public function minuman()
    {
        // Ambil produk dengan kategori 'minuman'
        $produk = Produk::where('type', 'minuman')->get();

        // Kirim data ke view
        return view('produk.minuman', compact('produk'));
    }
}
