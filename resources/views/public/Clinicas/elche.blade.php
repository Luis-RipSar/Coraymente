@extends('layouts.public')

@section('content')
<div class="clinicas-container">
    <section class="clinica-section">
        <header class="clinica-header">
            <h2>Clínica CorayMente · Elche</h2>
            <p>Calle Antonio Mora Ferrández, 16, 03202 (Alicante)</p>
        </header>

        <div class="gallery-group">
            <div class="gallery-grid">
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/adultos1.jpg') }}" alt="Adultos 1"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/adultos2.jpg') }}" alt="Adultos 2"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/ninos1.jpg') }}" alt="Niños 1"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/ninos2.jpg') }}" alt="Niños 2"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/mixto1.jpg') }}" alt="Mixto 1"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/mixto2.jpg') }}" alt="Mixto 2"></div>
            </div>
        </div>
    </section>
</div>
@endsection