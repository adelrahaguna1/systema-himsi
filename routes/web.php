<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    $products = \App\Models\Produk::all(); // Fetch all products
    return view('welcome', compact('products')); // Pass products to the view
})->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Show login form
Route::post('/login', [AuthController::class, 'login']); // Process login form

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register'); // Show registration form
Route::post('/register', [AuthController::class, 'register']); // Process registration form

Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // Process logout

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        $products = \App\Models\Produk::all(); // Fetch all products
        return view('dashboard', compact('products')); // Pass products to the view
    })->name('dashboard');

    Route::post('/reviews', [\App\Http\Controllers\ReviewController::class, 'store'])->name('reviews.store');
});

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('edit');
Route::get('/profile/update', [ProfileController::class, 'update'])->name('update');

Route::get('/produk/merchandise', [ProdukController::class, 'merchandise'])->name('produk.merchandise');
Route::get('/produk/makanan', [ProdukController::class, 'makanan'])->name('produk.makanan');
Route::get('/produk/minuman', [ProdukController::class, 'minuman'])->name('produk.minuman');

Route::middleware(['auth', 'is_admin'])
    ->prefix('admin') // URL prefix for admin routes
    ->name('admin.')  // Route name prefix
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard'); // Render the admin dashboard view
        })->name('dashboard');

        Route::resource('products', ProductController::class); // Resource route for managing products
    });
