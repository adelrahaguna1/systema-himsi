<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;


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
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('edit');
Route::get('/profile/update', [ProfileController::class, 'update'])->name('update');
