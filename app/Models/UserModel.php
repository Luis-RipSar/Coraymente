<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class UserModel extends Authenticatable
{
    use HasFactory, Notifiable;
    
    // 1) Indico que la PK NO es autoincremental
    public $incrementing = false;
    // 2) Y que su tipo es string, no int
    protected $keyType = 'string';
    protected $table = 'users';
    protected $fillable = [
        'id',
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

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string) Str::uuid();
            }
        });
    }

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

    public function pacientes(): BelongsToMany
    {
        return $this->belongsToMany(
            self::class,       // modelo destino
            'citas',           // tabla pivote
            'id_profesional',  // FK en la pivote apuntando a este usuario
            'id_usuario'      // FK en la pivote apuntando al paciente
        )->distinct();        // para evitar duplicados si hay varias citas
    }
}
