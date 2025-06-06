{{-- Banner de Cookies --}}
<div x-data="{ showCookieBanner: !localStorage.getItem('cookiesAccepted') }" x-show="showCookieBanner"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-y-full"
    x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform translate-y-0"
    x-transition:leave-end="opacity-0 transform translate-y-full" class="cookie-banner">

    <div class="cookie-content">
        <div class="cookie-text">
            Utilizamos cookies propias y de terceros para mejorar nuestros servicios.
            <a href="{{ route('politica-cookies') }}">Ver política de cookies</a>
        </div>
        <div class="cookie-buttons">
            <button @click="localStorage.setItem('cookiesAccepted', 'true'); showCookieBanner = false"
                class="cookie-btn">
                Aceptar
            </button>
            <button @click="showCookieBanner = false" class="cookie-btn">
                Rechazar
            </button>
        </div>
    </div>
</div>