@extends('layouts.public')

@section('content')
<div class="clinicas-container">
    <section class="clinica-section">
        <header class="clinica-header">
            <h2>Clínica CorayMente · ELCHE</h2>
            <p>Calle Antonio Mora Ferrández, 16, 03202 (Alicante)</p>
        </header>

        <div class="gallery-group">
            <div class="gallery-grid">
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/1.jpg') }}" alt="Imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/3.jpg') }}" alt="Imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/12.jpg') }}" alt="Imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/2.jpg') }}" alt="Imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/18.jpg') }}" alt="Imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/4.jpg') }}" alt="Imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/7.jpg') }}" alt="Imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/9.jpg') }}" alt="Imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/10.jpg') }}" alt="Imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/11.jpg') }}" alt="Imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/13.jpg') }}" alt="Imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/15.jpg') }}" alt="Imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/16.jpg') }}" alt="Imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/elche/17.jpg') }}" alt="Imagen"></div>
            </div>
        </div>
    </section>
</div>
@endsection