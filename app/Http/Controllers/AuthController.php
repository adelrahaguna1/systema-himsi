<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Untuk mengelola data HTTP request
use App\Models\User; // Model User untuk interaksi database
use Illuminate\Support\Facades\Auth; // Facade untuk Autentikasi
use Illuminate\Support\Facades\Hash; // Facade untuk Hashing password
use Illuminate\Validation\Rules; // Untuk aturan validasi password yang lebih modern

class AuthController extends Controller
{
    /**
     * Menampilkan form registrasi.
     */
    public function showRegistrationForm()
    {
        // Kembalikan view 'register.blade.php' dari folder 'resources/views/auth/'
        return view('auth.register');
    }

    /**
     * Memproses data dari form registrasi.
     */
    public function register(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class], // Pastikan email unik di tabel users
            'password' => ['required', 'confirmed', Rules\Password::defaults()], // 'confirmed' memeriksa field 'password_confirmation'
                                                                               // Rules\Password::defaults() menerapkan aturan default Laravel (min 8 char, dll)
        ]);

        // 2. Buat user baru jika validasi berhasil
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Penting! Selalu hash password sebelum disimpan
        ]);

        // 3. Login user yang baru dibuat
        Auth::login($user);

        // 4. Redirect ke halaman dashboard (atau halaman lain setelah login)
        return redirect()->route('dashboard');
    }

    /**
     * Menampilkan form login.
     */
    public function showLoginForm()
    {
        // Kembalikan view 'login.blade.php' dari folder 'resources/views/auth/'
        return view('auth.login');
    }

    /**
     * Memproses data dari form login.
     */
    public function login(Request $request)
    {
        // 1. Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Coba lakukan login
        // Auth::attempt() akan otomatis membandingkan hash password
        if (Auth::attempt($credentials, $request->boolean('remember'))) { // $request->boolean('remember') untuk fitur 'ingat saya'
            // 3a. Jika berhasil, regenerate session dan redirect
            $request->session()->regenerate();

            // Redirect ke halaman yang dituju sebelum ke login, atau ke dashboard jika tidak ada
            return redirect()->intended(route('dashboard'));
        }

        // 3b. Jika gagal, kembali ke form login dengan pesan error
        return back()->withErrors([
            'email' => 'Kredensial yang diberikan tidak cocok dengan data kami.', // Pesan error spesifik untuk field email
        ])->onlyInput('email'); // Kirim kembali input email saja (jangan password)
    }

    /**
     * Memproses logout user.
     */
    public function logout(Request $request)
    {
        Auth::logout(); // Logout user

        $request->session()->invalidate(); // Hapus data sesi

        $request->session()->regenerateToken(); // Buat ulang token CSRF

        // Redirect ke halaman utama
        return redirect('/');
    }
}
