{{-- resources/views/profesional/settings.blade.php --}}
@extends('layouts.app') {{-- o 'layouts.profesional' si tienes un layout específico para profesionales --}}

@section('header')
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Configuración de Perfil') }}
</h2>
@endsection

@section('content')
@if(session('status'))
<div class="bg-green-100 text-green-800 p-4 rounded mt-16">
    {{ session('status') }}
</div>
@endif
@if(session('statusPassword'))
<div class="bg-green-100 text-green-800 p-4 rounded mt-16">
    {{ session('statusPassword') }}
</div>
@endif

<div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 space-y-8">
        {{-- Sección: Editar Perfil --}}
        <section class="bg-white shadow sm:rounded-lg p-6">
            <header class="mb-4">
                <h3 class="text-lg font-medium text-gray-900">{{ __('Editar Perfil') }}</h3>
                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Actualiza tus datos de contacto.') }}
                </p>
            </header>

            <form method="POST" action="{{ route('profesional.perfil.update') }}">
                @csrf
                @method('PUT')

                {{-- Nombre --}}
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">{{ __('Nombre') }}</label>
                    <input id="nombre" name="nombre" type="text" value="{{ old('nombre', auth()->user()->nombre) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        required>
                    @error('nombre')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Apellidos --}}
                <div class="mb-4">
                    <label for="apellidos" class="block text-sm font-medium text-gray-700">{{ __('Apellidos')
                        }}</label>
                    <input id="apellidos" name="apellidos" type="text"
                        value="{{ old('apellidos', auth()->user()->apellidos) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        required>
                    @error('apellidos')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Correo electrónico')
                        }}</label>
                    <input id="email" name="email" type="email" value="{{ old('email', auth()->user()->email) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        required>
                    @error('email')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Teléfono --}}
                <div class="mb-4">
                    <label for="telefono" class="block text-sm font-medium text-gray-700">{{ __('Teléfono')
                        }}</label>
                    <input id="telefono" name="telefono" type="text"
                        value="{{ old('telefono', auth()->user()->telefono) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        required>
                    @error('telefono')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Guardar cambios') }}
                    </button>
                </div>
            </form>
        </section>

        {{-- Sección: Cambiar Contraseña --}}
        <section class="bg-white shadow sm:rounded-lg p-6">
            <header class="mb-4">
                <h3 class="text-lg font-medium text-gray-900">{{ __('Cambiar Contraseña') }}</h3>
                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Actualiza tu contraseña de acceso.') }}
                </p>
            </header>

            <form method="POST" action="{{ route('profesional.password.update') }}">
                @csrf
                @method('PUT')

                {{-- Contraseña actual --}}
                <div class="mb-4">
                    <label for="current_password" class="block text-sm font-medium text-gray-700">
                        {{ __('Contraseña actual') }}
                    </label>
                    <input id="current_password" name="current_password" type="password"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        required>
                    @error('current_password')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Nueva contraseña --}}
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        {{ __('Nueva contraseña') }}
                    </label>
                    <input id="password" name="password" type="password"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        required>
                    @error('password')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Confirmar contraseña --}}
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                        {{ __('Confirmar contraseña') }}
                    </label>
                    <input id="password_confirmation" name="password_confirmation" type="password"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        required>
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        {{ __('Actualizar contraseña') }}
                    </button>
                </div>
            </form>
        </section>

    </div>
</div>
@endsection