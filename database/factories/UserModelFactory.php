<?php

namespace Database\Factories;

use App\Models\UserModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserModelFactory extends Factory
{
    protected $model = UserModel::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'nombre' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
            'apellidos' => $this->faker->lastName(),
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address(),
            'ciudad' => $this->faker->city(),
            'role_id' => rand(2,3), // Asignar un role_id por defecto, puedes cambiarlo según tus necesidades
        ];
    }
}