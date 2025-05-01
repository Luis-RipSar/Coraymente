<nav x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 10)"
    :class="{ 'scrolled': scrolled }" class="public-nav">
    <div class="public-nav-inner">
        {{-- Logo que vuelve al inicio público --}}
        <a href="{{ route('inicio') }}" class="public-logo">
            <img src="{{ asset('imagenes/logo_vector.png') }}" alt="Coraymente">
        </a>

        {{-- Botón hamburguesa (móvil) --}}
        <button @click="open = !open" class="md:hidden p-2 focus:outline-none" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path :class="{ 'hidden': open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ 'hidden': !open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        {{-- Enlaces escritorio --}}
        <div class="public-links hidden md:flex items-center gap-6">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">Panel</a>
            <a href="{{ route('admin.usuarios.index') }}" class="nav-link">Pacientes</a>
            <a href="{{ route('admin.profesionales.index') }}" class="nav-link">Profesionales</a>
            <a href="{{ route('publicaciones.index') }}" class="nav-link">Publicaciones</a>
            <a href="{{ route('inicio') }}" class="nav-link">Volver a Inicio</a>
        </div>
    </div>
</nav>