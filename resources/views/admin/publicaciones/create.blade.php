@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.publicaciones.store') }}" method="POST" enctype="multipart/form-data" {{-- IMPORTANTE --}}
    class="pub-form">
    @csrf

    <h1 class="text-2xl font-bold mb-6">Crear nueva publicación</h1>

    <div class="pub-form__group">
        <label for="titulo" class="pub-form__label">Título</label>
        <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}" class="pub-form__input" required>
    </div>

    {{-- Campo de fichero --}}
    <div class="pub-form__group">
        <label for="imagen" class="pub-form__label">Imagen de portada</label>
        <input type="file" id="imagen" name="imagen" accept="image/*" class="pub-form__file">
        @error('imagen')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="pub-form__group">
        <label for="resumen" class="pub-form__label">Resumen</label>
        <textarea name="resumen" id="resumen" rows="3" class="pub-form__textarea"
            required>{{ old('resumen') }}</textarea>
    </div>

    <div class="pub-form__group">
        <label for="body" class="pub-form__label">Contenido</label>
        <textarea name="body" id="body" rows="6" class="pub-form__textarea" required>{{ old('body') }}</textarea>
    </div>

    <div class="pub-form__actions">
        <button type="submit" class="btn-pub-save">Guardar</button>
        <a href="{{ route('admin.publicaciones.index') }}" class="btn-pub-cancel">
            Cancelar
        </a>
    </div>
</form>
@endsection