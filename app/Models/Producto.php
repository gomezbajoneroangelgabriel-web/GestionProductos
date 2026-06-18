<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'producto',
        'descripcion',
        'unidades',
        'precio',
        'imagen'
];
}