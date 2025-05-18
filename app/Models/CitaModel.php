<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CitaModel extends Model
{
    protected $table = 'citas';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_usuario',
        'id_profesional',
        'sede',
        'sala',
        'fecha',
        'estado',
        'motivo',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string) Str::uuid();
            }
        });
    }

    public function usuario() {
        return $this->belongsTo(UserModel::class, 'id_usuario');
    }

    public function profesional() {
        return $this->belongsTo(UserModel::class, 'id_profesional');
    }
}
