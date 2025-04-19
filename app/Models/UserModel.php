<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserModel extends Authenticatable
{
    use HasFactory, Notifiable;
    
    protected $table = 'users';
    protected $fillable = [
        'email',
        'password',
        'nombre',
        'apellidos',
        'telefono',
        'direccion',
        'ciudad',
        'role_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function citas() {
        return $this->hasMany(CitaModel::class, 'id_usuario');
    }
    public function role()
{
    return $this->belongsTo(RoleModel::class, 'rol_id');
}
}
