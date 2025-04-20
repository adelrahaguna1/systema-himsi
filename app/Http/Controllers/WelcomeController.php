<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class WelcomeController extends Controller
{
    public function index()
    {
        // Ambil produk yang ingin ditampilkan di bagian "featured"
        $featuredProduk = Produk::take(3)->get(); // Ambil 2 produk pertama sebagai contoh

        return view('welcome', compact('featuredProduk'));
    }
}