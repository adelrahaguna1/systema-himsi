<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan atau perbarui data untuk Merchandise
        DB::table('produk')->updateOrInsert(
            ['name' => 'Lanyard HIMSI'], // Kondisi unik
            [
                'type' => 'merchandise',
                'price' => 14000,
                'image' => 'Mockup Lanyard.jpg',
                'stock' => 100,
                'updated_at' => now(),
            ]
        );

        DB::table('produk')->updateOrInsert(
            ['name' => 'Keychain HIMSI'], // Kondisi unik
            [
                'type' => 'merchandise',
                'price' => 10000,
                'image' => 'Keychain.png',
                'stock' => 50,
                'updated_at' => now(),
            ]
        );

        // Tambahkan atau perbarui data untuk Makanan
        DB::table('produk')->updateOrInsert(
            ['name' => 'Ayam Suwir Pedas'], // Kondisi unik
            [
                'type' => 'makanan',
                'price' => 15000,
                'image' => 'Ayam Suwir.jpg',
                'stock' => 30,
                'updated_at' => now(),
            ]
        );

        DB::table('produk')->updateOrInsert(
            ['name' => 'Ayam Katsu Komplit'], // Kondisi unik
            [
                'type' => 'makanan',
                'price' => 15000,
                'image' => 'chicken-katsu.jpeg',
                'stock' => 20,
                'updated_at' => now(),
            ]
        );

        // Tambahkan atau perbarui data untuk Minuman
        DB::table('produk')->updateOrInsert(
            ['name' => 'Pop Ice Aneka Rasa'], // Kondisi unik
            [
                'type' => 'minuman',
                'price' => 7000,
                'image' => 'Pop Ice.jpg',
                'stock' => 50,
                'updated_at' => now(),
            ]
        );
    }
}
