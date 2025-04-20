<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Untuk mengelola file gambar
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        // Mengembalikan view 'create.blade.php' dari folder 'resources/views/admin/products/'
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // Terima data request
    {
        // 1. Validasi data input dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255', // Wajib, teks, maks 255 char
            'description' => 'nullable|string', // Boleh kosong, teks
            'price' => 'required|numeric|min:0', // Wajib, angka, min 0
            'type' => 'required|string|in:merchandise,food,drink', // Wajib, teks, salah satu dari pilihan
            'stock' => 'required|integer|min:0', // Wajib, angka bulat, min 0
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Boleh kosong, harus file gambar, format tertentu, maks 2MB
        ]);

        dd('Validation passed!', $validatedData);

        // 2. Handle Upload Gambar (jika ada)
        $imagePath = null; // Default path gambar null
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Simpan gambar ke folder 'public/products' (storage/app/public/products)
            // Nama file akan di-generate otomatis & unik oleh Laravel
            // 'public' mengacu pada disk 'public' di config/filesystems.php
            $imagePath = $request->file('image')->store('products', 'public'); // Simpan & dapatkan path relatifnya
        }
        dd('Validation passed!', $validatedData);
        // 3. Siapkan data untuk disimpan ke database
        // Ambil semua data yang sudah divalidasi
        $dataToStore = $validatedData;
        // Jika ada gambar yg diupload, tambahkan path-nya ke data
        if ($imagePath) {
            $dataToStore['image'] = $imagePath;
        }

        // 4. Simpan data produk baru ke database
        try {
            Product::create($dataToStore); // Gunakan mass assignment

            // 5. Redirect ke halaman index produk dengan pesan sukses
            return redirect()->route('admin.products.index')->with('success', 'Produk baru berhasil ditambahkan!');

        } catch (\Exception $e) {
            // 6. Jika terjadi error saat menyimpan ke DB, kembali ke form dengan pesan error
            //    (Opsional: Hapus gambar yg sudah terupload jika penyimpanan DB gagal)
            if ($imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
            return back()->withInput()->with('error', 'Gagal menambahkan produk: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
