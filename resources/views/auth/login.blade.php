<x-guest-layout>
    <div class="login-container">
        <div class="login-box">
            <!-- Mensaje de sesión -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="login-label" />
                    <x-text-input id="email" class="login-input mt-1" type="email" name="email" :value="old('email')"
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Contraseña')" class="login-label" />
                    <x-text-input id="password" class="login-input mt-1" type="password" name="password" required
                        autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="mb-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm login-checkbox" name="remember">
                        <span class="login-label ml-2 text-sm">{{ __('Recuerdame') }}</span>
                    </label>
                </div>

                <div class="mt-6">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-black hover:text-blue-600">
                        {{ __('¿Has olvidado tu contraseña?') }}
                    </a>
                    @endif
                </div>

                <!-- Botón de login -->
                <div class="mt-4">
                    <button type="submit" class="login-button">
                        {{ __('Inicio Sesion') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>