<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk Autentikasi (Manual)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Menampilkan form login
Route::post('/login', [AuthController::class, 'login']); // Memproses data dari form login

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register'); // Menampilkan form register
Route::post('/register', [AuthController::class, 'register']); // Memproses data dari form register

Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // Memproses logout

// Contoh Rute yang Dilindungi (hanya bisa diakses setelah login)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('edit');
Route::get('/profile/update', [ProfileController::class, 'update'])->name('update');

Route::get('/produk/merchandise', [ProdukController::class, 'merchandise'])->name('produk.merchandise');

Route::middleware(['auth', 'is_admin'])
    ->prefix('admin') // URL jadi /admin/...
    ->name('admin.')   // Nama rute diawali admin.
    ->group(function () {

        // ---> PASTIKAN RUTE INI ADA DI DALAM GRUP <---
        Route::get('/dashboard', function() {
            // View 'admin.dashboard' belum kita buat, jadi return teks dulu
            return 'Ini Halaman Dashboard Admin (View belum dibuat)';
        })->name('dashboard'); // Ini akan membuat nama rute 'admin.dashboard'
        // ----------------------------------------------------

        // Rute resource untuk produk
        Route::resource('products', ProductController::class);

        // Rute admin lain bisa ditambah di sini

}); // Akhir grup admin
