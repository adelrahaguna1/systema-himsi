<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware; // Pastikan ini di-import

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) { // <--- Cari bagian ini

        // Di sinilah kita mendaftarkan alias middleware
        $middleware->alias([
            // ... alias lain mungkin sudah ada ...
            'is_admin' => \App\Http\Middleware\IsAdminMiddleware::class, // <-- Tambahkan ini
        ]);

        // Anda juga bisa menambahkan middleware ke grup global atau web di sini jika perlu
        // $middleware->appendToGroup('web', \App\Http\Middleware\ExampleMiddleware::class);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        // ... Konfigurasi Exception Handling ...
    })->create();
