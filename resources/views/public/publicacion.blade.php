@extends('layouts.public')

@section('content')
{{-- Contenedor principal --}}
<div class="publicacion-container">
    {{-- Hero con imagen de fondo y título sobrepuesto --}}
    @if($publication->image_url)
    <div class="publicacion-hero" style="background-image: url('{{ asset($publication->image_url) }}')">
        <h1 class="publicacion-hero-title">{{ $publication->titulo }}</h1>
    </div>
    @else
    <h1 class="text-3xl font-bold text-gray-800 mb-6 publicacion-titulo">{{ $publication->titulo }}</h1>
    @endif

    {{-- Meta datos --}}
    <div class="publicacion-meta">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M5 11h14M5 19h14M5 15h14" />
            </svg>
            {{ $publication->published_at->format('d M, Y') }}
        </span>
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6 2l3 7H2l3-7zm12 0l3 7h-7l3-7zM2 13h20v9H2v-9z" />
            </svg>
            Clínica CorayMente
        </span>
    </div>

    {{-- Cuerpo del artículo --}}
    <div class="publicacion-body">
        {!! nl2br(e($publication->body)) !!}
    </div>

    {{-- Llamada a la acción --}}
    <div class="publicacion-cta">
        <a href="{{ route('contacto') }}">Solicita tu cita</a>
    </div>

    @endsection