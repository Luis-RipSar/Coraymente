{{-- resources/views/public/clinicas.blade.php --}}
@extends('layouts.public')

@section('content')
<div class="clinicas-container">
    {{-- Clínica Almoradí --}}
    <section class="clinica-section">
        <header class="clinica-header">
            <h2>Clínica CorayMente · Almoradí</h2>
            <p>Calle Mayor, 1, 03160 Almoradí (Alicante)</p>
        </header>

        {{-- Despachos Adultos --}}
        <div class="gallery-group">
            <h3 class="gallery-group-title">Despachos Adultos</h3>
            <div class="gallery-grid">
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/adultos1.jpg') }}" alt="Adultos 1">
                </div>
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/adultos2.jpg') }}" alt="Adultos 2">
                </div>
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/adultos3.jpg') }}" alt="Adultos 3">
                </div>
            </div>
        </div>

        {{-- Despachos Niños --}}
        <div class="gallery-group">
            <h3 class="gallery-group-title">Despachos Niños</h3>
            <div class="gallery-grid">
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/ninos1.jpg') }}" alt="Niños 1"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/ninos2.jpg') }}" alt="Niños 2"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/ninos3.jpg') }}" alt="Niños 3"></div>
            </div>
        </div>

        {{-- Despachos Mixto --}}
        <div class="gallery-group">
            <h3 class="gallery-group-title">Despachos Mixto</h3>
            <div class="gallery-grid">
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/mixto1.jpg') }}" alt="Mixto 1"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/mixto2.jpg') }}" alt="Mixto 2"></div>
            </div>
        </div>
    </section>

    {{-- Clínica Elche --}}
    <section class="clinica-section">
        <header class="clinica-header">
            <h2>Clínica CorayMente · Elche</h2>
            <p>Calle Antonio Mora Ferrández, 16, 03202 (Alicante)</p>
        </header>

        {{-- Despachos Adultos --}}
        <div class="gallery-group">
            <h3 class="gallery-group-title">Despachos Adultos</h3>
            <div class="gallery-grid">
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/adultos1.jpg') }}" alt="Adultos 1"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/adultos2.jpg') }}" alt="Adultos 2"></div>
            </div>
        </div>

        {{-- Despachos Niños --}}
        <div class="gallery-group">
            <h3 class="gallery-group-title">Despachos Niños</h3>
            <div class="gallery-grid">
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/ninos1.jpg') }}" alt="Niños 1"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/ninos2.jpg') }}" alt="Niños 2"></div>
            </div>
        </div>

        {{-- Despachos Mixto --}}
        <div class="gallery-group">
            <h3 class="gallery-group-title">Despachos Mixto</h3>
            <div class="gallery-grid">
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/mixto1.jpg') }}" alt="Mixto 1"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/mixto2.jpg') }}" alt="Mixto 2"></div>
            </div>
        </div>
    </section>
</div>
@endsection