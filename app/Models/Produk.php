<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari default (plural lowercase dari nama model)
    protected $table = 'produk';

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'id',
        'name',
        'type',
        'price',
        'image',
        'stock',
        'created_at',
        'updated_at',
    ];
}
