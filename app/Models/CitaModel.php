<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CitaModel extends Model
{
    protected $table = 'citas';

    protected $fillable = [
        'id_usuario',
        'id_profesional',
        'fecha_hora',
        'estado',
        'motivo',
    ];

    public function usuario() {
        return $this->belongsTo(UserModel::class, 'id_usuario');
    }

    public function profesional() {
        return $this->belongsTo(ProfesionalModel::class, 'id_profesional');
    }
}
