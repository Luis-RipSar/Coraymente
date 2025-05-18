<?php

namespace Database\Seeders;

use App\Enums\EstadoCitaEnum;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CitasSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('es_ES');

        $paciente    = DB::table('users')->where('nombre', 'paciente')->first();
        $profesional = DB::table('users')->where('nombre', 'profesional')->first();
        // Generar, por ejemplo, 10 citas
        for ($i = 0; $i < 4; $i++) {
            DB::table('citas')->insert([
                'id'             => (string) Str::uuid(),
                'id_usuario'     => $paciente->id,
                'id_profesional' => $profesional->id,
                'sede'           => $faker->city,
                'sala'           => $faker->word,
                'fecha'          => Carbon::now()
                                         ->addDays($faker->numberBetween(-5, 10))
                                         ->toDateTimeString(),
                'motivo'         => $faker->sentence(6),
                'estado'         => $faker->randomElement(EstadoCitaEnum::values()),
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);
        }
    }
}