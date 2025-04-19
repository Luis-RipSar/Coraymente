<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            ['nombre' => 'admin', 'id' => 1],
            ['nombre' => 'profesional', 'id' => 2],
            ['nombre' => 'paciente', 'id' => 3],
            ['nombre' => 'publico', 'id' => 4],
        ]);
    }
}