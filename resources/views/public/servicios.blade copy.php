@extends('layouts.public')


<!-- /* Menú lateral */
    .servicios-menu {
        background: #F9FAFB;
        border: 1px solid #E5E7EB;
        border-radius: .5rem;
        position: sticky;
        top: 14rem;
        align-self: start;
    }

    .servicios-menu ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .servicios-menu .servicio-item {
        border-bottom: 1px solid #E5E7EB;
    }

    .servicios-menu .servicio-item:hover {
        background: color.adjust($color2, $lightness: 10%);
    }

    .servicios-menu .servicio-item:last-child {
        border-bottom: none;
    }

    .servicios-menu summary.menu-item {
        list-style: none;
        cursor: pointer;
        padding: .75rem 1rem;
        font-weight: 600;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: background .2s;
    }

    .servicios-menu .servicio-item[open]>summary.menu-item {
        background: $color2;
        ;
        color: $blanco;
        border-top-left-radius: .5rem;
        border-top-right-radius: .5rem;
    }

    .servicios-menu summary.menu-item .chevron {
        transition: transform .3s;
    }

    .servicios-menu .servicio-item[open]>summary.menu-item .chevron {
        transform: rotate(180deg);
    }

    /* Submenú oculto por defecto */
    .servicios-menu .submenu {
        display: none;

    }

    /* Mostrar cuando el <details> esté abierto */
    .servicios-menu .servicio-item[open]>.submenu {
        display: block;
    }

    /* Enlaces de submenú */
    .servicios-menu .submenu-link {
        width: 100%;
        background: #F9FAFB;
        padding: .5rem 2rem;
        font-size: .875rem;
        color: $colorTexto;
        text-decoration: none;
        transition: background .5s;
        text-align: left;
    }

    .servicios-menu .submenu-link:hover {
        background: color.adjust($color1, $lightness: 10%);
    }

    /* Enlaces de submenú activos */
    .servicios-menu .submenu-link.active {
        background: $color1;
        color: $blanco;
    }

    .servicios-menu .submenu-link.active:hover {
        background: color.adjust($color1, $lightness: -10%);
    } -->


@section('content')
<div class="servicios-container" x-data="{ active: 'psicologia' }">
    {{-- Menú lateral --}}
    <nav class="servicios-menu">
        <ul>
            {{-- Psicología --}}
            <li>
                <details class="servicio-item" :open="active.startsWith('psicologia')">
                    <summary class="menu-item" @click.prevent="active = 'psicologia'">
                        Psicología
                        <span class="chevron">▾</span>
                    </summary>
                    <ul class="submenu">
                        <li>
                            <button class="submenu-link" :class="{ 'active': active==='psicologia_infantil' }"
                                @click.prevent="active='psicologia_infantil'">
                                Infantil
                            </button>
                        </li>
                        <li>
                            <button class="submenu-link" :class="{ 'active': active==='psicologia_adultos' }"
                                @click.prevent="active='psicologia_adultos'">
                                Adultos
                            </button>
                        </li>
                        <li>
                            <button class="submenu-link" :class="{ 'active': active==='psicologia_domicilio' }"
                                @click.prevent="active='psicologia_domicilio'">
                                A domicilio
                            </button>
                        </li>
                        <li>
                            <button class="submenu-link" :class="{ 'active': active==='psicologia_online' }"
                                @click.prevent="active='psicologia_online'">
                                Online
                            </button>
                        </li>
                    </ul>
                </details>
            </li>

            {{-- Terapia Ocupacional --}}
            <li>
                <details class="servicio-item" :open="active.startsWith('terapia_ocupacional')">
                    <summary class="menu-item" @click.prevent="active = 'terapia_ocupacional'">
                        Terapia Ocupacional
                        <span class="chevron">▾</span>
                    </summary>
                    <ul class="submenu">
                        <li>
                            <button class="submenu-link" :class="{ 'active': active==='terapia_ocupacional_infantil' }"
                                @click.prevent="active='terapia_ocupacional_infantil'">
                                Infantil
                            </button>
                        </li>
                        <li>
                            <button class="submenu-link" :class="{ 'active': active==='terapia_ocupacional_adultos' }"
                                @click.prevent="active='terapia_ocupacional_adultos'">
                                Adultos
                            </button>
                        </li>
                        <li>
                            <button class="submenu-link" :class="{ 'active': active==='terapia_ocupacional_domicilio' }"
                                @click.prevent="active='terapia_ocupacional_domicilio'">
                                A domicilio
                            </button>
                        </li>
                    </ul>
                </details>
            </li>

            {{-- Logopedia --}}
            <li>
                <details class="servicio-item" :open="active.startsWith('logopedia')">
                    <summary class="menu-item" @click.prevent="active = 'logopedia'">
                        Logopedia
                        <span class="chevron">▾</span>
                    </summary>
                    <ul class="submenu">
                        <li>
                            <button class="submenu-link" :class="{ 'active': active==='logopedia_infantil' }"
                                @click.prevent="active='logopedia_infantil'">
                                Infantil
                            </button>
                        </li>
                        <li>
                            <button class="submenu-link" :class="{ 'active': active==='logopedia_adulto' }"
                                @click.prevent="active='logopedia_adulto'">
                                Adultos
                            </button>
                        </li>
                        <li>
                            <button class="submenu-link" :class="{ 'active': active==='logopedia_domicilio' }"
                                @click.prevent="active='logopedia_domicilio'">
                                A domicilio
                            </button>
                        </li>
                    </ul>
                </details>
            </li>

            {{-- Neuropsicología --}}
            <li>
                <details class="servicio-item" :open="active.startsWith('neuropsicologia')">
                    <summary class="menu-item" @click.prevent="active = 'neuropsicologia'">
                        Neuropsicología
                        <span class="chevron">▾</span>
                    </summary>
                    <ul class="submenu">
                        <li>
                            <button class="submenu-link" :class="{ 'active': active==='neuropsicologia_valoracion' }"
                                @click.prevent="active='neuropsicologia_valoracion'">
                                Valoración
                            </button>
                        </li>
                        <li>
                            <button class="submenu-link"
                                :class="{ 'active': active==='neuropsicologia_rehabilitacion' }"
                                @click.prevent="active='neuropsicologia_rehabilitacion'">
                                Rehabilitación
                            </button>
                        </li>
                    </ul>
                </details>
            </li>

            {{-- Terapia Asistida con Animales --}}
            <li>
                <details class="servicio-item" :open="active.startsWith('taa')">
                    <summary class="menu-item" @click.prevent="active = 'taa'">
                        Terapia con Animales
                        <span class="chevron">▾</span>
                    </summary>
                    <ul class="submenu">
                        <li>
                            <button class="submenu-link" :class="{ 'active': active==='taa_individual' }"
                                @click.prevent="active='taa_individual'">
                                Individual
                            </button>
                        </li>
                        <li>
                            <button class="submenu-link" :class="{ 'active': active==='taa_grupal' }"
                                @click.prevent="active='taa_grupal'">
                                Grupal
                            </button>
                        </li>
                    </ul>
                </details>
            </li>

            {{-- Nutrición --}}
            <li>
                <details class="servicio-item" :open="active.startsWith('nutricion')">
                    <summary class="menu-item" @click.prevent="active = 'nutricion'">
                        Nutrición
                        <span class="chevron">▾</span>
                    </summary>
                    <ul class="submenu">
                        <li>
                            <button class="submenu-link" :class="{ 'active': active==='nutricion_individual' }"
                                @click.prevent="active='nutricion_individual'">
                                Individual
                            </button>
                        </li>
                        <li>
                            <button class="submenu-link" :class="{ 'active': active==='nutricion_grupal' }"
                                @click.prevent="active='nutricion_grupal'">
                                Grupal
                            </button>
                        </li>
                    </ul>
                </details>
            </li>
        </ul>
    </nav>

    {{-- Contenido dinámico --}}
    <div class="servicios-content">
        {{-- Psicología general --}}
        <section x-show="active==='psicologia'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/psicologia.jpeg') }}" alt="Psicología">
            <h2>Psicología</h2>
            <p>Ofrecemos atención psicológica personalizada para todas las edades…</p>
        </section>

        {{-- Psicología Infantil --}}
        <section x-show="active==='psicologia_infantil'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/psicologia_infantil.jpg') }}" alt="Psicología Infantil">
            <h2>Psicología · Infantil</h2>
            <p>Especializados en el desarrollo emocional de niños…</p>
        </section>

        {{-- Psicología Adultos --}}
        <section x-show="active==='psicologia_adultos'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/psicologia_adultos.jpg') }}" alt="Psicología Adultos">
            <h2>Psicología · Adultos</h2>
            <p>Terapia individual para adultos…</p>
        </section>
        {{-- Psicología a domicilio --}}
        <section x-show="active==='psicologia_domicilio'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/psicologia_domicilio.jpg') }}" alt="Psicología a Domicilio">
            <h2>Psicología · A domicilio</h2>
            <p>Terapia a domicilio</p>
        </section>

        {{-- Psicología a domicilio --}}
        <section x-show="active==='psicologia_online'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/psicologia_online.jpg') }}" alt="Psicología Online">
            <h2>Psicología · Online</h2>
            <p>Terapia online</p>
        </section>

        <!-- Terapia Ocupacional -->
        <section x-show="active==='terapia_ocupacional'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/terapia_ocupacional.jpg') }}" alt="TO General">
            <h2>Terapia Ocupacional</h2>
            <p>Recuperamos y potenciamos tus habilidades motoras…</p>
        </section>
        <section x-show="active==='terapia_ocupacional_infantil'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/to_infantil.jpg') }}" alt="TO Infantil">
            <h2>Terapia Ocupacional · Infantil</h2>
            <p>Intervenciones lúdicas para hitos psicomotores…</p>
        </section>
        <section x-show="active==='terapia_ocupacional_adultos'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/to_adultos.jpg') }}" alt="TO Adultos">
            <h2>Terapia Ocupacional · Adultos</h2>
            <p>Recuperación funcional tras lesiones…</p>
        </section>
        <section x-show="active==='terapia_ocupacional_domicilio'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/to_domicilio.jpg') }}" alt="TO Domicilio">
            <h2>Terapia Ocupacional · A domicilio</h2>
            <p>Sesiones en el hogar adaptadas…</p>
        </section>

        <!-- Logopedia -->
        <section x-show="active==='logopedia'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/logopedia.jpg') }}" alt="Logopedia">
            <h2>Logopedia</h2>
            <p>Tratamos trastornos del habla y lenguaje…</p>
        </section>
        <section x-show="active==='logopedia_infantil'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/logopedia_infantil.jpg') }}" alt="Logopedia Infantil">
            <h2>Logopedia · Infantil</h2>
            <p>Reeducación del habla en edad temprana…</p>
        </section>
        <section x-show="active==='logopedia_adulto'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/logopedia_adulto.jpg') }}" alt="Logopedia Adulto">
            <h2>Logopedia · Adulto</h2>
            <p>Reeducación del habla en edad avanzada...</p>
        </section>
        <section x-show="active==='logopedia_domicilio'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/logopedia_domicilio.jpg') }}" alt="Logopedia Domicilio">
            <h2>Logopedia · Domicilio</h2>
            <p>Reeducación del habla en edad temprana…</p>
        </section>
        <!-- …continúa para cada variante… -->

        <!-- Neuropsicología -->
        <section x-show="active==='neuropsicologia'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/neuropsicologia.jpg') }}" alt="Neuropsicología">
            <h2>Neuropsicología</h2>
            <p>Evaluamos y rehabilitamos funciones cognitivas…</p>
        </section>
        <section x-show="active==='neuropsicologia_valoracion'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/neuropsicologia_valoracion.jpg') }}" alt="Valoración">
            <h2>Neuropsicología · Valoración</h2>
            <p>Administración de pruebas estandarizadas…</p>
        </section>
        <section x-show="active==='neuropsicologia_rehabilitacion'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/neuropsicologia_rehabilitacion.jpg') }}" alt="Rehabilitación">
            <h2>Neuropsicología · Rehabilitación</h2>
            <p>Programas personalizados de ejercicios cognitivos…</p>
        </section>

        <!-- Terapia Asistida con Animales -->
        <section x-show="active==='taa'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/taa_animales.jpg') }}" alt="Terapia con Animales">
            <h2>Terapia con Animales</h2>
            <p>Intervenciones con animales entrenados…</p>
        </section>
        <section x-show="active==='taa_individual'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/taa_individual.jpg') }}" alt="TA Individual">
            <h2>Terapia con Animales · Individual</h2>
            <p>Sesiones uno a uno con el animal…</p>
        </section>
        <section x-show="active==='taa_grupal'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/taa_grupal.jpg') }}" alt="TA Grupal">
            <h2>Terapia con Animales · Grupal</h2>
            <p>Dinámicas grupales con el animal…</p>
        </section>

        <!-- Nutrición -->
        <section x-show="active==='nutricion'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/nutricion.jpg') }}" alt="Nutrición">
            <h2>Nutrición</h2>
            <p>Planes de alimentación personalizados…</p>
        </section>
        <section x-show="active==='nutricion_individual'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/nutricion_individual.jpg') }}" alt="Nutrición Individual">
            <h2>Nutrición · Individual</h2>
            <p>Seguimiento y ajustes personalizados…</p>
        </section>
        <section x-show="active==='nutricion_grupal'" x-cloak class="servicio-seccion">
            <img src="{{ asset('imagenes/servicios/nutricion_grupal.jpg') }}" alt="Nutrición Grupal">
            <h2>Nutrición · Grupal</h2>
            <p>Talleres y charlas en comunidad…</p>
        </section>
    </div>
</div>
@endsection