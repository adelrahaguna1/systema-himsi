<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'type', // 'merchandise', 'food', 'drink'
        'image', // Path atau nama file gambar
        'stock',
    ];

    // Anda bisa tambahkan relasi atau method lain di sini nanti
}
