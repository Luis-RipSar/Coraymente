@extends('layouts.public')

@section('content')
<div class="clinicas-container">
    <section class="clinica-section">
        <header class="clinica-header">
            <h2>Clínica CorayMente · ALMORADÍ</h2><BR></BR>
            <p>Calle Mayor, 1, 03160 Almoradí (Alicante)</p>
        </header>

        <div class="gallery-group">
            <div class="gallery-grid">
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/1.jpg') }}" alt="imagen"></div>
                <div class="gallery-item"><img src="{{ asset('imagenes/almoradi/2.jpg') }}" alt="imagen"></div>
            </div>
        </div>

</div>

@endsection