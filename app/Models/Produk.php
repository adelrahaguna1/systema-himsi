<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk'; // Specify the table name
    protected $fillable = ['name', 'type', 'price', 'stock', 'image']; // Mass assignable fields
}
