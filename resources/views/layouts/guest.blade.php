<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Clínica Coraymente') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- Incluyendo la barra de navegación --}}
    @include('components.public-menu')

    {{-- Aquí se inyecta el contenido de la vista --}}
    <main class="py-10 px-4">
        {{ $slot }}
    </main>

    @include('components.public-footer')

    {{-- Incluyendo el script de Google Analytics --}}
</body>

</html>