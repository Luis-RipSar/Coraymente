{{-- resources/views/contacto.blade.php --}}
@extends('layouts.public')

@section('content')
<div class="contact-grid">
    {{-- Columna izquierda --}}
    <div class="contact-info">
        <h1>Estamos aquí para ayudarte</h1>
        <p>
            ¿Te animas a formar parte de un proyecto hecho con mucho <strong>cora</strong> y <strong>mente</strong>?
            <br>
            Cuidate y dejanos cuidarte. ¡En CorayMente estaremos encantadas de ayudarte!
        </p>

        <ul class="contact-list">
            <li class="contact-item">
                <svg class="contact-item-icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5.05 11a7 7 0 1113.9 0c0 5-6.95 10-6.95 10S5.05 16 5.05 11z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 14a3 3 0 100-6 3 3 0 000 6z" />
                </svg>
                <div class="contact-item-text">
                    <h3>Dirección</h3>
                    <p>Calle Mayor, 1, 03160 Almoradí, Alicante</p>
                    <p>Calle Antonio Mora Ferrández, 16, 03202 Elche, Alicante</p>
                </div>
            </li>

            <li class="contact-item">
                <svg class="contact-item-icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.341 1.09l-2.257 1.698a11.042 11.042 0 005.516 5.516l1.698-2.257a1 1 0 011.09-.341l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C7.82 21 3 16.18 3 10V5z" />
                </svg>
                <div class="contact-item-text">
                    <h3>Teléfono</h3>
                    <p>(+34) 688 70 48 85 (Almoradí)<br>(+34) 722 26 58 54 (Elche)</p>
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
                    <p>Lunes a Viernes: 9:00 – 20:00
                </div>
            </li>

            <li class="contact-item">
                <svg class="contact-item-icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 8l7.5 5L18 8m0-2H3a2 2 0 00-2 2v10a2 2 0 002 2h18a2 2 0 002-2V8a2 2 0 00-2-2z" />
                </svg>
                <div class="contact-item-text">
                    <h3>Correo electrónico</h3>
                    <p>info@clinicaejemplo.com</p>
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