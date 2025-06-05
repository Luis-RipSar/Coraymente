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
    
    public $incrementing = false;
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
        return $this->hasMany(CitaModel::class, 'id_profesional');
    }
    
    public function role()
    {
        return $this->belongsTo(RoleModel::class, 'rol_id');
    }

    public function pacientes(): BelongsToMany
    {
        return $this->belongsToMany(
            self::class,
            'citas',
            'id_profesional',
            'id_usuario'
        )->distinct();
    }
}
