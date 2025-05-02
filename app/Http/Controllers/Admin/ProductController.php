<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk; // Use the Produk model

class ProductController extends Controller
{
    public function index()
    {
        $products = Produk::all(); // Fetch all products from the database
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:999999999',
            'description' => 'required|string|max:999999999',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('produk', 'public') : 'default-product.png';

        Produk::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Produk $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Produk $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|numeric|max:999999999',
            'stock' => 'required|integer|max:999999',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:999999999',
            'description' => 'required|string|max:999999999',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('produk', 'public');
            $product->image = $imagePath;
            $product->save();
            session()->flash('success', 'Gambar produk berhasil diperbarui.');
        }

        $product->update([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Produk $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dihapus.');
    }
}
