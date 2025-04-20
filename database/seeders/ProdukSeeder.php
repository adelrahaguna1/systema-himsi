<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan atau perbarui data
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
    }
}
