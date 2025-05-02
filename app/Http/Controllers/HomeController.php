<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        $products = Produk::all(); // Fetch all products from the database
        return view('dashboard', compact('products'));
    }

    public function about()
    {
        return view('about'); // Render the about view
    }
    public function kontak()
    {
        return view('kontak'); // Asumsi nama view Anda adalah 'kontak.blade.php'
    }

}
