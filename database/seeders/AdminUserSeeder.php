<?php

namespace Database\Seeders;

use App\Models\UserModel;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('es_ES');

        UserModel::create([
            'id'                  => (string) Str::uuid(),
            'email'               => 'admin@admin.com',
            'email_verified_at'   => now(),
            'password'            => Hash::make('12345678'),
            'nombre'              => 'admin',
            'apellidos'           => 'admin',
            'telefono'            => $faker->phoneNumber,
            'direccion'           => $faker->streetAddress,
            'ciudad'              => $faker->city,
            'role_id'             => 1,
            'remember_token'      => Str::random(10),
        ]);
    }
}
