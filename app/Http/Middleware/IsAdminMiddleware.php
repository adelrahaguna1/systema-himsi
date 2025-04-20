<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // <-- Import Auth Facade
use Symfony\Component\HttpFoundation\Response;

class IsAdminMiddleware
{
    protected $middlewareAliases = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        // ... middleware lain ...
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
         // ---> Tambahkan baris ini <---
        'is_admin' => \App\Http\Middleware\IsAdminMiddleware::class,
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Cek apakah pengguna sudah login DAN memiliki status admin
        if (Auth::check() && Auth::user()->is_admin) {
            // 2. Jika ya, lanjutkan request ke tujuan berikutnya (controller/route)
            return $next($request);
        }


        // 3. Jika tidak (belum login atau bukan admin),
        //    kembalikan ke halaman utama atau halaman login dengan pesan error.
        //    Atau tampilkan halaman 403 Forbidden.

        // Opsi A: Redirect ke halaman utama dengan pesan flash (jika halaman utama bisa diakses semua)
        // return redirect('/')->with('error', 'Anda tidak memiliki hak akses Admin.');

        // Opsi B: Tampilkan halaman error 403 (Akses Ditolak)
        abort(403, 'AKSES DITOLAK: Anda bukan Administrator.');
    }
}
