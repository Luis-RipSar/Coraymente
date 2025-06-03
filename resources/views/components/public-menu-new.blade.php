<nav x-data="{ mobileOpen: false, clinicasOpen: false, userOpen: false, scrolled: false }"
    @scroll.window="scrolled = (window.pageYOffset > 10)"
    @keydown.escape.window="mobileOpen = false; clinicasOpen = false; userOpen = false"
    :class="{ 'scrolled': scrolled }" class="public-nav">

    <div class="public-nav-inner">
        {{-- Logo --}}
        <a href="{{ route('inicio') }}" class="public-logo">
            <img src="{{ asset('imagenes/logo_vector.png') }}" alt="Coraymente">
        </a>

        {{-- Botón hamburguesa (móvil) --}}
        <button @click="mobileOpen = !mobileOpen" class="public-menu-button" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
                <path x-show="mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        {{-- Enlaces de navegación (desktop) --}}
        <div class="public-links">
            <div class="group" @click.away="clinicasOpen = false">
                <a href="#" class="nav-link" @click.prevent="clinicasOpen = !clinicasOpen">
                    Clínicas
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block ml-1" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': clinicasOpen }">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <ul class="dropdown" x-show="clinicasOpen" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                    <li>
                        <a href="{{ route('clinicas.almoradi') }}" class="dropdown-link">Almoradí</a>
                    </li>
                    <li>
                        <a href="{{ route('clinicas.elche') }}" class="dropdown-link">Elche</a>
                    </li>
                </ul>
            </div>
            <a href="{{ route('equipo') }}" class="nav-link">Equipo</a>
            <a href="{{ route('servicios') }}" class="nav-link">Servicios</a>
            <a href="{{ route('publicaciones.index') }}" class="nav-link">Publicaciones</a>
            <a href="{{ route('contacto') }}" class="nav-link">Contacto</a>
        </div>

        {{-- Botón de Inicio Sesión / Menú de usuario --}}
        @guest
        <a href="{{ route('login') }}" class="public-login-btn">Inicio Sesión</a>
        @else
        <div class="user-menu" @click.away="userOpen = false">
            <button class="user-button" @click="userOpen = !userOpen" :class="{ 'active': userOpen }">
                <span class="user-name">{{ auth()->user()->nombre }}</span>
                <i class="bi bi-chevron-down" :class="{ 'rotate-180': userOpen }"></i>
            </button>
            <div class="user-dropdown" x-show="userOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1"
                style="display: none;">
                @if (auth()->user()->role_id == '1')
                <a href="{{ route('admin.dashboard') }}" class="dropdown-link">
                    <i class="bi bi-speedometer2"></i>
                    Panel de Control
                </a>
                @endif
                @if (auth()->user()->role_id == '2')
                <a href="{{ route('profesional.dashboard') }}" class="dropdown-link">
                    <i class="bi bi-speedometer2"></i>
                    Panel de Control
                </a>
                @endif
                <form method="POST" action="{{ route('logout') }}" class="dropdown-form">
                    @csrf
                    <button type="submit" class="dropdown-link">
                        <i class="bi bi-box-arrow-right"></i>
                        Cerrar sesión
                    </button>
                </form>
            </div>
        </div>
        @endguest
    </div>

    {{-- Overlay de fondo para móvil --}}
    <div class="mobile-backdrop" :class="{ 'show': mobileOpen }" @click="mobileOpen = false"></div>

    {{-- Menú móvil --}}
    <div class="public-mobile-menu" :class="{ 'show': mobileOpen }">
        {{-- Botón cerrar menú móvil --}}
        <button @click="mobileOpen = false" class="mobile-close-button" aria-label="Cerrar menú">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="mobile-links">
            <div class="group">
                <a href="#" class="nav-link" @click.prevent="clinicasOpen = !clinicasOpen">
                    Clínicas
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block ml-1" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': clinicasOpen }">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <ul class="dropdown" :class="{ 'show': clinicasOpen }">
                    <li><a href="{{ route('clinicas.almoradi') }}" class="dropdown-link">Almoradí</a></li>
                    <li><a href="{{ route('clinicas.elche') }}" class="dropdown-link">Elche</a></li>
                </ul>
            </div>
            <a href="{{ route('equipo') }}" class="nav-link">Equipo</a>
            <a href="{{ route('servicios') }}" class="nav-link">Servicios</a>
            <a href="{{ route('publicaciones.index') }}" class="nav-link">Publicaciones</a>
            <a href="{{ route('contacto') }}" class="nav-link">Contacto</a>
            @guest
            <a href="{{ route('login') }}" class="public-login-btn">Inicio Sesión</a>
            @else
            <div class="user-menu">
                <button class="user-button" @click="userOpen = !userOpen">
                    {{ auth()->user()->nombre }}
                    <i class="bi bi-chevron-down" :class="{ 'rotate-180': userOpen }"></i>
                </button>
                <div class="user-dropdown" x-show="userOpen">
                    @if (auth()->user()->role_id == '1')
                    <a href="{{ route('admin.dashboard') }}" class="dropdown-link">Panel de Control</a>
                    @endif
                    @if (auth()->user()->role_id == '2')
                    <a href="{{ route('profesional.dashboard') }}" class="dropdown-link">Panel de Control</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}" class="dropdown-form">
                        @csrf
                        <button type="submit" class="dropdown-link">Cerrar sesión</button>
                    </form>
                </div>
            </div>
            @endguest
            @guest
            <a href="{{ route('login') }}" class="public-login-btn">Inicio Sesión</a>
            @else
            <div class="user-menu">
                <button class="user-button" @click="userOpen = !userOpen">
                    {{ auth()->user()->nombre }}
                    <i class="bi bi-chevron-down" :class="{ 'rotate-180': userOpen }"></i>
                </button>
                <div class="user-dropdown" x-show="userOpen">
                    @if (auth()->user()->role_id == '1')
                    <a href="{{ route('admin.dashboard') }}" class="dropdown-link">Panel de Control</a>
                    @endif
                    @if (auth()->user()->role_id == '2')
                    <a href="{{ route('profesional.dashboard') }}" class="dropdown-link">Panel de Control</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}" class="dropdown-form">
                        @csrf
                        <button type="submit" class="dropdown-link">Cerrar sesión</button>
                    </form>
                </div>
            </div>
            @endguest
            </a>
            <ul class="dropdown" x-show="clinicasOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95">
                <li><a href="{{ route('clinicas.almoradi') }}" class="dropdown-link">Almoradí</a></li>
                <li><a href="{{ route('clinicas.elche') }}" class="dropdown-link">Elche</a></li>
            </ul>
        </div>
        <a href="{{ route('equipo') }}" class="nav-link">Equipo</a>
        <a href="{{ route('servicios') }}" class="nav-link">Servicios</a>
        <a href="{{ route('publicaciones.index') }}" class="nav-link">Publicaciones</a>
        <a href="{{ route('contacto') }}" class="nav-link">Contacto</a>
    </div>
    </div>
</nav>