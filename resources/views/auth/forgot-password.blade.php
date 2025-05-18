<x-guest-layout>
    <div class="publicacion-container mt-16">
        <center>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <h1>
                {{ __('¿Olvidaste tu contraseña? No hay problema. Solo indícanos tu dirección de correo electrónico y te
                enviaremos un enlace
                para restablecerla y que puedas elegir una nueva.') }}
            </h1>
            <form method="POST" action="{{ route('password.email') }}" class="pub-form">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <center>
                    <x-primary-button>
                        {{ __('Enviar enlace de restablecimiento de contraseña') }}
                    </x-primary-button>
                </center>

            </form>
        </center>
    </div>
</x-guest-layout>