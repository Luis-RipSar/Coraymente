<?php

namespace Database\Seeders;

use App\Models\Publication;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PublicationsSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'titulo'      => 'Cómo gestionar el estrés en el trabajo',
                'resumen'     => 'Técnicas y consejos para mantener tu mente en calma en entornos laborales exigentes.',
                'body'        => 'El estrés es una respuesta natural…',
                'image_url'   => 'imagenes/publicacion1.jpg',
                'published_at'=> Carbon::now()->subDays(10),
            ],
             [
                'titulo'      => 'Beneficios de la meditación diaria',
                'resumen'     => 'Descubre cómo 10 minutos al día pueden cambiar tu bienestar.',
                'body'        => 'La meditación ayuda a… [añade aquí tu artículo] …',
                'image_url'   => 'imagenes/publicacion2.jpg',
                'published_at'=> Carbon::now()->subDays(7),
            ],
            [
                'titulo'      => '5 hábitos para mejorar tu salud mental',
                'resumen'     => 'Incorpora estas rutinas sencillas en tu día a día.',
                'body'        => 'Tener buenos hábitos es clave… [completa con tu texto] …',
                'image_url'   => 'imagenes/publicacion2.jpg',
                'published_at'=> Carbon::now()->subDays(3),
            ],
        ];

        foreach ($items as $item) {
            Publication::create([
                'id'            => (string) Str::uuid(),
                'titulo'        => $item['titulo'],
                'resumen'       => $item['resumen'],
                'body'          => $item['body'],
                'image_url'     => $item['image_url'],
                'published_at'  => $item['published_at'],
            ]);
        }
    }
}