{{-- resources/views/public/publicaciones.blade.php --}}
@extends('layouts.public')

@section('content')
<div class="publicaciones-container">
    <h1 class="publicaciones-titulo">Noticias</h1>

    <div class="publicaciones-grid">
        @forelse($publicaciones ?? [] as $publicacion)
        <article class="publicacion-card">
            @if($publicacion->image_url)
            <img src="{{ asset($publicacion->image_url) }}" alt="{{ $publicacion->titulo }}" class="publicacion-img">
            @endif
            <div class="publicacion-body">
                <h2 class="publicacion-title">{{ $publicacion->titulo }}</h2>
                <p class="publicacion-resumen">{{ $publicacion->resumen }}</p>
                <a href="{{ route('publicaciones.show', $publicacion) }}" class="publicacion-readmore">
                    Leer más →
                </a>
            </div>
        </article>
        @empty
        <p>No hay publicaciones disponibles.</p>
        @endforelse
    </div>
</div>
@endsection