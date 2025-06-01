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
                'titulo'      => 'Actividades de la vida diaria',
                'resumen'     => 'En este video te mostramos cómo actividades de la vida diaria como abotonarse una camisa, 
                                abrochar una cremallera o la escritura requieren mucho más que solo movimiento de los dedos.',
                'body'        => 'En este video te mostramos cómo actividades de la vida diaria como abotonarse una camisa, 
                                abrochar una cremallera o la escritura requieren mucho más que solo movimiento de los dedos. 
                                Para lograrlo con éxito, es fundamental trabajar con el sistema sensorial táctil y fortalecer la motricidad fina.
                                <br><br>
                                ✔️ El sistema táctil nos ayuda a percibir las texturas, la presión y el tamaño de los objetos, permitiendo que nuestras manos ajusten la fuerza y precisión necesarias.
                                <br>
                                ✔️ La motricidad fina nos da el control y coordinación para manipular botones, cierres y otros pequeños elementos con destreza.
                                <br><br>
                                Por eso, en terapia ocupacional trabajamos ejercicios específicos que estimulan estas habilidades, favoreciendo la independencia en las actividades diarias. ¡Pequeños avances hacen grandes diferencias!
                                <br>
                                ✨ ¿Tu peque tiene dificultades con estas tareas? ',
                'image_url'   => 'imagenes/publicaciones/publicacion1.jpg',
                'published_at'=> Carbon::now()->subDays(10),
            ],
            [
                'titulo'      => 'Autocoonocimiento',
                'resumen'     => 'En una vida llena de demandas, prisas y expectativas, a veces es muy difícil poder dedicar el tiempo suficiente a cuidarnos de forma integra y a dar respuesta a nuestras necesidades. ',
                'body'        => 'En una vida llena de demandas, prisas y expectativas, a veces es muy difícil poder dedicar el tiempo suficiente a cuidarnos de forma integra y a dar respuesta a nuestras necesidades. 
                                No obstante, el primer paso para poder sentirnos bien es la consciencia en uno mismo, comprendiendo y atendiendo a aquello que nos hace sentir bien, evitando que ese malestar se instaure en nosotros y provoque síntomas como desregulación emocional o bloqueo, problemas de memoria o despistes y somatizaciones físicas. 
                                <br>
                                ¿Cómo evitarlo?
                                <br>
                                ✔️ La expresión emocional nos ayuda a validar y darle importancia a lo que sentimos, así como permite reajustar ideas y fomentar la gestión emocional, toma de decisiones y afrontamiento de problemas.
                                <br>
                                ✔️ Dedicarnos tiempo, mejora la relación con nosotros mismos y permite ganar mayor consciencia y capacidad de regulación.
                                <br>
                                ✔️ Rodearnos de vínculos sanos y tener una red de apoyo sólida con los cuales podamos ser y sentir sin miedo al juicio, favorece el desarrollo de habilidades de interacción con nuestro entorno así como tener fuentes de corregulación, comunicación y cuidado.
                                <br>
                                Desde la psicología trabajamos en poder poner nombre a lo que nos sucede, desarrollando estrategias de gestión emocional y afrontamiento que permiten mejorar la relación con uno mismo y con su entorno.',
                'image_url'   => 'imagenes/publicaciones/publicacion2.jpg',
                'published_at'=> Carbon::now()->subDays(3),
            ],
            [
                'titulo'      => 'El valor de las pequeñas cosas',
                'resumen'     => 'Cuánto nos dan y nos enseñan a cambio de tan poco. Los animales tienen una gran habilidad de conexión con el mundo, siendo esto un recurso maravilloso que nos permite en terapia.',
                'body'        => 'Cuánto nos dan y nos enseñan a cambio de tan poco. Los animales tienen una gran habilidad de conexión con el mundo, siendo esto un recurso maravilloso que nos permite en terapia, trabajar con perfiles que por diversas razones, presentan dificultades en la interacción y relación con uno mismo y con los demás.
                                <br>
                                Y es que para conseguirlo, es importantísimo desarrollar la capacidad de poder calmar la mente, siempre llena de pensamientos y preocupaciones relacionadas con el pasado o con el futuro.
                                <br>
                                ¿Cómo hacerlo?
                                <br>
                                ✔️ Atendiendo a los detalles. Fíjate en el color de los edificios, matrículas de los coches, la ropa de las personas que te cruzas, el sonido de los pájaros, los olores… ¡utiliza todos tus sentidos!
                                <br>
                                ✔️Actividades que requieran de movimiento, y es que el movimiento es una herramienta de regulación ¡súper efectiva!
                                <br>
                                ✔️ Ejercicios de respiración y relajación. Para favorecer los estados de calma y evitar que la cabeza sobrepiense en exceso.
                                <br>
                                Desde la terapia asistida con animales, trabajamos en desarrollar estrategias de consciencia en el momento presente y conexión con uno mismo y con nuestro entorno. 
                                <br>
                                ¿Te animas a probarlo? ',
                'image_url'   => 'imagenes/publicaciones/publicacion3.jpg',
                'published_at'=> Carbon::now()->subDays(1),
            ],
            [
                'titulo'      => 'Visto en consulta',
                'resumen'     => 'Hace unas semanas recibimos el caso de un niño con migrañas muy recurrentes y ansiedad. Tras una evaluación exhaustiva, detectamos un desafío en el procesamiento sensorial vestibular.',
                'body'        => 'Visto en cosulta:
                                    <br>
                                    Hace unas semanas recibimos el caso de un niño con migrañas muy recurrentes y ansiedad.
                                    <br>
                                    Tras una evaluación exhaustiva, detectamos un desafío en el procesamiento sensorial vestibular.
                                    <br>
                                    Desde terapia ocupacional, trabajamos sobre ello y logramos espaciar los episodios de migraña y reducir su intensidad.👏🏼
                                    <br>
                                    Cada caso es único, y por eso, escuchamos, evaluamos y acompañamos desde el origen. Porque cuando entendemos la raíz, la intervención tiene verdadero sentido ',
                'image_url'   => 'imagenes/publicaciones/publicacion4.jpg',
                'published_at'=> Carbon::now()->subDays(1),
            ],
            [
                'titulo'      => 'Visto en consulta',
                'resumen'     => 'En consulta es común escuchar que las personas a las que acompañamos en sus procesos terapéuticos refieran somatizaciones.',
                'body'        => 'En consulta es común escuchar que las personas a las que acompañamos en sus procesos terapéuticos refieran somatizaciones.
                                    <br>
                                    La somatización es una llamada de atención de nuestro cuerpo como respuesta al malestar psicológico y emocional, la cual de no atenderse a tiempo, puedo ocasionar verdaderos problemas en el día a día. 
                                    <br>
                                    Por ello, es una consecuencia, no la base del problema, siendo necesaria una correcta atención e intervención psicológica para cortar de raíz aquellos patrones que favorecen estas sensaciones fisiológicas tan desagradables.
                                    <br>
                                    Cada caso es único, y por eso, escuchamos, evaluamos y acompañamos desde el origen. Porque cuando entendemos la raíz, la intervención tiene verdadero sentido ',
                'image_url'   => 'imagenes/publicaciones/publicacion5.jpg',
                'published_at'=> Carbon::now()->subDays(1),
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