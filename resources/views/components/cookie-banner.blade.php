{{-- Banner de Cookies --}}
<div x-data="{ showCookieBanner: !localStorage.getItem('cookiesAccepted') }" x-show="showCookieBanner"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-y-full"
    x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform translate-y-0"
    x-transition:leave-end="opacity-0 transform translate-y-full"
    class="fixed bottom-0 left-0 right-0 bg-color1 text-negro p-4 shadow-lg z-50">

    <div class="max-w-screen-xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="text-sm sm:text-base text-center sm:text-left">
            Utilizamos cookies propias y de terceros para mejorar nuestros servicios.
            <a href="{{ route('politica-cookies') }}" class="underline hover:text-color2">Ver política de cookies</a>
        </div>
        <div class="flex gap-2">
            <button @click="localStorage.setItem('cookiesAccepted', 'true'); showCookieBanner = false"
                class="bg-color2 text-blanco px-4 py-2 rounded hover:bg-opacity-90 transition-colors text-sm sm:text-base">
                Aceptar
            </button>
            <button @click="showCookieBanner = false"
                class="bg-color3 text-negro px-4 py-2 rounded hover:bg-opacity-90 transition-colors text-sm sm:text-base">
                Rechazar
            </button>
        </div>
    </div>
</div>