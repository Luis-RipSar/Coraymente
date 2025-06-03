@extends('layouts.public')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold mb-6">Política de Cookies</h1>

    <div class="space-y-6 text-gray-600">
        <p>En esta web utilizamos cookies propias y de terceros para mejorar nuestros servicios y mostrarle publicidad
            relacionada con sus preferencias mediante el análisis de sus hábitos de navegación.</p>

        <section class="mb-8">
            <h2 class="text-xl font-semibold mb-3">¿Qué son las cookies?</h2>
            <p>Una cookie es un pequeño archivo de texto que se almacena en su navegador cuando visita casi cualquier
                página web. Su utilidad es que la web sea capaz de recordar su visita cuando vuelva a navegar por esa
                página.</p>
        </section>

        <section class="mb-8">
            <h2 class="text-xl font-semibold mb-3">Tipos de cookies que utilizamos</h2>
            <ul class="list-disc pl-5 space-y-2">
                <li><strong>Cookies técnicas:</strong> Son necesarias para el funcionamiento de la web.</li>
                <li><strong>Cookies de análisis:</strong> Nos permiten analizar el comportamiento de los usuarios de
                    forma anónima.</li>
                <li><strong>Cookies de personalización:</strong> Permiten recordar criterios seleccionados por los
                    usuarios.</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-xl font-semibold mb-3">¿Cómo deshabilitar las cookies?</h2>
            <p>Puede usted permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración
                de las opciones de su navegador de internet. En los siguientes enlaces encontrará información adicional
                sobre cómo hacerlo en los navegadores más populares:</p>
            <ul class="list-disc pl-5 space-y-2 mt-3">
                <li><a href="https://support.google.com/chrome/answer/95647?hl=es" class="text-blue-600 hover:underline"
                        target="_blank">Google Chrome</a></li>
                <li><a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias"
                        class="text-blue-600 hover:underline" target="_blank">Mozilla Firefox</a></li>
                <li><a href="https://support.microsoft.com/es-es/windows/eliminar-y-administrar-cookies-168dab11-0753-043d-7c16-ede5947fc64d"
                        class="text-blue-600 hover:underline" target="_blank">Microsoft Edge</a></li>
                <li><a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac"
                        class="text-blue-600 hover:underline" target="_blank">Safari</a></li>
            </ul>
        </section>
    </div>
</div>
@endsection