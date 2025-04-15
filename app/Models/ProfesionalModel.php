<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfesionalModel extends Model
{
    protected $table = 'profesionales';

    protected $fillable = [
        'email',
        'password',
        'nombre',
        'apellidos',
        'telefono',
    ];

    public function citas()
    {
        return $this->hasMany(CitaModel::class, 'id_profesional');
    }
}
