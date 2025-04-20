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
}
