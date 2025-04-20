<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class WelcomeController extends Controller
{
    public function index()
    {
        $produk = Produk::all(); // Ambil semua produk dari database
        return view('welcome', compact('produk'));
    }
}