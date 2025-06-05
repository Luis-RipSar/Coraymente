<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id', 'titulo', 'resumen',
        'body', 'image_url', 'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
