<nav x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 10)" class="public-nav">
    <div class="max-w-7xl mx-auto py-2 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo y enlaces izquierda -->
            <div class="public-nav-inner" style="padding: 1rem 0;">
                <a href="{{ route('inicio') }}" class="public-logo">
                    <img src="{{ asset('public/imagenes/logo_vector.png') }}" alt="Coraymente">
                </a>

                <!-- Enlaces de navegación (escritorio) -->
                <div class="hidden sm:flex sm:items-center sm:ml-10 space-x-8">
                    <x-nav-link :href="route('inicio')" :active="request()->routeIs('inicio')">
                        {{ __('Inicio') }}
                    </x-nav-link>
                    <x-nav-link :href="route('profesional.dashboard')"
                        :active="request()->routeIs('profesional.dashboard')">
                        {{ __('Panel de Control') }}
                    </x-nav-link>
                    <x-nav-link :href="route('profesional.perfil')" :active="request()->routeIs('profesional.perfil')">
                        {{ __('Editar Perfil') }}
                    </x-nav-link>


                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-nav-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Cerrar sesión') }}
                        </x-nav-link>
                    </form>
                </div>
            </div>


            <!-- Botón hamburguesa (móvil) -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open}" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open}" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menú móvil -->
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <div class="px-4">
                <br>
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->nombre }}</div>
                <br>
            </div>
            <x-responsive-nav-link :href="route('profesional.dashboard')"
                :active="request()->routeIs('profesional.dashboard')">
                {{ __('Panel') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('profesional.perfil')">
                {{ __('Perfil') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('inicio')" :active="request()->routeIs('inicio')">
                {{ __('Volver a Inicio') }}
            </x-responsive-nav-link>
        </div>

        <!-- Usuario móvil -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    {{ __('Cerrar sesión') }}
                </x-responsive-nav-link>
            </form>
        </div>
    </div>
</nav>