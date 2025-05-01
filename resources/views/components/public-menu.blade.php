<nav x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 10)"
    :class="{ 'scrolled': scrolled }" class="public-nav">
    <div class="public-nav-inner">
        {{-- Logo --}}
        <a href="{{ route('inicio') }}" class="public-logo">
            <img src="{{ asset('imagenes/logo_vector.png') }}" alt="Coraymente">
        </a>

        {{-- Botón hamburguesa (sólo móvil) --}}
        <button @click="open = !open" class="md:hidden p-2 focus:outline-none" aria-label="Toggle navigation">
            <!-- icono “hamburguesa” -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path :class="{ 'hidden': open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ 'hidden': !open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        {{-- Enlaces de navegación (desktop) --}}
        <div class="public-links hidden md:flex">
            <div class="group">
                <a href="#" class="nav-link">Clínicas</a>
                <ul class="dropdown">
                    <li>
                        <a href="{{ route('clinicas.almoradi') }}" class="dropdown-link">
                            Almoradí
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('clinicas.elche') }}" class="dropdown-link">
                            Elche
                        </a>
                    </li>
                </ul>
            </div>
            <a href="{{ route('equipo') }}">Equipo</a>
            <a href="{{ route('servicios') }}">Servicios</a>
            <a href="{{ route('formacion') }}">Formación</a>
            <a href="{{ route('publicaciones.index') }}">Publicaciones</a>
            <a href="{{ route('contacto') }}">Contacto</a>
        </div>

        {{-- Botón de Inicio Sesión (desktop) --}}
        @guest
        <a href="{{ route('login') }}" class="public-login-btn hidden md:inline-flex">
            Inicio Sesión
        </a>
        @endguest

        @auth
        <div class="relative group hidden md:inline-flex">
            <button class="public-login-btn flex items-center gap-2" type="button">
                {{ auth()->user()->nombre }}
            </button>

            {{-- Dropdown con “Perfil” y “Cerrar sesión” --}}
            <ul class="dropdown-sesion">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="dropdown-sesion-link">
                        Panel de Control
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-sesion-link">
                            Cerrar sesión
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        @endauth
    </div>
</nav>
{{-- Menú desplegable móvil
<div class="mobile-menu md:hidden" x-show="open" x-cloak @click.away="open = false">
    <div class="public-links-mobile">
        <a href="{{ route('clinicas') }}">Clínicas</a>
        <a href="{{ route('equipo') }}">Equipo</a>
        <a href="{{ route('servicios') }}">Servicios</a>
        <a href="{{ route('formacion') }}">Formación</a>
        <a href="{{ route('publicaciones.index') }}">Publicaciones</a>
        <a href="{{ route('contacto') }}">Contacto</a>
        <a href="{{ route('login') }}" class="public-login-btn-mobile">Inicio Sesión</a>
    </div>
</div> --}}