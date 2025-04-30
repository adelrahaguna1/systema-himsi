<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function merchandise()
    {
        $produk = Produk::where('type', 'merchandise')->paginate(6); // Paginate 6 items per page
        return view('produk.merchandise', compact('produk'));
    }

    public function makanan()
    {
        $produk = Produk::where('type', 'food')->paginate(6); // Paginate 6 items per page
        return view('produk.makanan', compact('produk'));
    }

    public function minuman()
    {
        $produk = Produk::where('type', 'drink')->paginate(6); // Paginate 6 items per page
        return view('produk.minuman', compact('produk'));
    }
}
