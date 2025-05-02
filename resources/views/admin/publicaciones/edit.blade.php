@extends('layouts.admin')

@section('header')
<h1 class="text-2xl font-bold">Editar publicación</h1>
@endsection

@section('content')
<form action="{{ route('admin.publicaciones.update', $publication) }}" method="POST">
    @csrf @method('PUT')

    <div class="grid gap-4">
        {{-- ID (UUID) --}}
        <label>
            <span class="font-medium">ID (UUID)</span>
            <input type="text" name="id" value="{{ old('id', $publication->id) }}" class="mt-1 block w-full" required>
        </label>

        {{-- Título --}}
        <label>
            <span class="font-medium">Título</span>
            <input type="text" name="titulo" value="{{ old('titulo', $publication->titulo) }}" class="mt-1 block w-full"
                required>
        </label>

        {{-- Resumen --}}
        <label>
            <span class="font-medium">Resumen</span>
            <textarea name="resumen" class="mt-1 block w-full" rows="3"
                required>{{ old('resumen', $publication->resumen) }}</textarea>
        </label>

        {{-- Body --}}
        <label>
            <span class="font-medium">Contenido</span>
            <textarea name="body" class="mt-1 block w-full" rows="6"
                required>{{ old('body', $publication->body) }}</textarea>
        </label>

        {{-- Image URL --}}
        <label>
            <span class="font-medium">URL de Imagen</span>
            <input type="text" name="image_url" value="{{ old('image_url', $publication->image_url) }}"
                class="mt-1 block w-full">
        </label>

        {{-- Published At --}}
        <label>
            <span class="font-medium">Fecha de publicación</span>
            <input type="datetime-local" name="published_at"
                value="{{ old('published_at', optional($publication->published_at)->format('Y-m-d\TH:i')) }}"
                class="mt-1 block w-full">
        </label>
    </div>

    <div class="mt-6 flex gap-4">
        <button type="submit" class="btn-primary">Actualizar</button>
        <a href="{{ route('admin.publicaciones.index') }}" class="btn-secondary">
            Cancelar
        </a>
    </div>
</form>
@endsection