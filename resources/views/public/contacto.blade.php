{{-- resources/views/public/contacto.blade.php --}}
@extends('layouts.public')

@section('content')
<div class="contact-grid">
    {{-- Columna izquierda --}}
    <div class="contact-info">
        <h1>Estamos aquí para ayudarte</h1>
        <p>
            Si planeas visitarnos, ten en cuenta que estamos cerca de paradas de autobús atendidas por las líneas
            <strong>3, 4 y 7</strong>, lo que hace que llegar hasta aquí sea muy sencillo y conveniente a través del
            transporte público. <em>¡Esperamos verte pronto!</em> Si necesitas más detalles o información adicional,
            no dudes en ponerte en contacto con nosotros a través de los datos de esta página.
        </p>

        <ul class="contact-list">
            <li class="contact-item">
                <svg class="contact-item-icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <div class="contact-item-text">
                    <h3>Dirección</h3>
                    <p>Av. de los Castros, n°53B, 39005<br>Santander, Cantabria</p>
                </div>
            </li>

            <li class="contact-item">
                <svg class="contact-item-icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 10a1 1 0 011-1h3l2-3 2 3h3a1 1 0 011 1v1a2 2 0 01-2 2h-1l-1 2-1-2H9a2 2 0 01-2-2v-1z" />
                </svg>
                <div class="contact-item-text">
                    <h3>Teléfono</h3>
                    <p>(+34) 942 08 86 12<br>(+34) 644 85 38 11</p>
                </div>
            </li>

            <li class="contact-item">
                <svg class="contact-item-icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" stroke-width="2">
                    <circle cx="12" cy="12" r="10" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                </svg>
                <div class="contact-item-text">
                    <h3>Horario</h3>
                    <p>Lunes a Viernes: 9:00 – 21:00
                </div>
            </li>
        </ul>
    </div>

    {{-- Columna derecha: Formulario --}}
    <div>
        <div class="contact-form-box">
            <h2 class="mb-6">Contacto</h2>
            <form action="#" method="POST" class="space-y-4">
                @csrf

                <div class="contact-field">
                    <label for="nombre" class="contact-label">Nombre *</label>
                    <input id="nombre" name="nombre" type="text" required class="contact-input">
                </div>

                <div class="contact-field">
                    <label for="correo" class="contact-label">Correo *</label>
                    <input id="correo" name="correo" type="email" required class="contact-input">
                </div>

                <div class="contact-field">
                    <label for="telefono" class="contact-label">Teléfono *</label>
                    <input id="telefono" name="telefono" type="tel" required class="contact-input">
                </div>

                <div class="contact-field">
                    <label for="especialidad" class="contact-label">Selecciona especialidad</label>
                    <select id="especialidad" name="especialidad" class="contact-select">
                        <option value="">-- Elige una opción --</option>
                        <option value="psicologia">Psicología</option>
                        <option value="neuropsicologia">Neuropsicología</option>
                        <option value="terapia">Terapia Ocupacional</option>
                        <option value="logopedia">Logopedia</option>
                    </select>
                </div>

                <div class="contact-field">
                    <label for="mensaje" class="contact-label">Mensaje *</label>
                    <textarea id="mensaje" name="mensaje" rows="4" required class="contact-textarea"></textarea>
                </div>

                <div class="contact-field flex items-center">
                    <input id="privacidad" name="privacidad" type="checkbox" required class="contact-checkbox">
                    <label for="privacidad" class="ml-2 text-sm text-gray-600">
                        He leído y acepto la <a href="#" class="underline text-blue-600">política de privacidad</a>
                    </label>
                </div>

                <div>
                    <button type="submit" class="contact-submit">
                        Enviar &rarr;
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection