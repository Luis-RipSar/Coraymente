<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    public $incrementing = false;         // Si usas UUID
    protected $keyType = 'string';        // Si usas UUID

    protected $fillable = [
        'id', 'titulo', 'resumen',
        'body', 'image_url', 'published_at',
    ];

    // Añade este array:
    protected $casts = [
        'published_at' => 'datetime',
    ];
}
