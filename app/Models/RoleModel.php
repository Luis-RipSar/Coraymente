<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel  extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $fillable = [
        'id',
        'nombre'];

    public function usuarios()
    {
        return $this->hasMany(UserModel::class, 'rol_id');
    }
}