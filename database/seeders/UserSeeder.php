<?php

namespace Database\Seeders;

use App\Models\UserModel;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserModel::factory()->count(10)->create();
        
        $faker = Faker::create('es_ES');

        UserModel::create([
            'id'                  => (string) Str::uuid(),
            'email'               => 'paciente@paciente.com',
            'email_verified_at'   => now(),
            'password'            => Hash::make('12345678'),
            'nombre'              => 'paciente',
            'apellidos'           => 'paciente',
            'telefono'            => $faker->phoneNumber,
            'direccion'           => $faker->streetAddress,
            'ciudad'              => $faker->city,
            'role_id'             => 3,
            'remember_token'      => Str::random(10),
        ]);

        UserModel::create([
            'id'                  => (string) Str::uuid(),
            'email'               => 'profesional@profesional.com',
            'email_verified_at'   => now(),
            'password'            => Hash::make('12345678'),
            'nombre'              => 'profesional',
            'apellidos'           => 'profesional',
            'telefono'            => $faker->phoneNumber,
            'direccion'           => $faker->streetAddress,
            'ciudad'              => $faker->city,
            'role_id'             => 2,
            'remember_token'      => Str::random(10),
        ]);
    }
}
