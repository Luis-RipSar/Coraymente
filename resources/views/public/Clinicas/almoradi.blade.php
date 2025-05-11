@extends('layouts.public')

@section('content')
<div class="clinicas-container">
    <section class="clinica-section">
        <header class="clinica-header">
            <h2>Clínica CorayMente · Almoradí</h2>
            <p>Calle Mayor, 1, 03160 Almoradí (Alicante)</p>
        </header>

        <div class="gallery-group">
            <div class="gallery-grid">
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/adultos1.jpg') }}" alt="imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/adultos2.jpg') }}" alt="imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/adultos3.jpg') }}" alt="imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/ninos1.jpg') }}" alt="imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/ninos2.jpg') }}" alt="imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/ninos3.jpg') }}" alt="imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/mixto1.jpg') }}" alt="imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/mixto2.jpg') }}" alt="imagen"></div>
            </div>
        </div>

</div>
@endsection