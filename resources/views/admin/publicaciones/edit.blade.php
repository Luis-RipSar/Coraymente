@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.publicaciones.update', $publicacion) }}" method="POST" class="pub-form"
    enctype="multipart/form-data">
    @csrf @method('PUT')

    <h1 class="text-2xl font-bold">Editar publicación</h1>
    <input type="hidden" name="id" value="{{ old('id', $publicacion->id) }}" required>
    <input type="hidden" name="image_url" value="{{ old('image_url', $publicacion->image_url) }}">

    <div class="pub-form__group">
        <label class="pub-form__label">Título</label>
        <input type="text" name="titulo" value="{{ old('titulo', $publicacion->titulo) }}" class="pub-form__input"
            required>
    </div>

    <div class="pub-form__group">
        <label class="pub-form__label">Imagen de portada</label>
        <input type="file" name="imagen" accept="image/*" class="pub-form__file">
    </div>

    <div class="pub-form__group">
        <label class="pub-form__label">Resumen</label>
        <textarea name="resumen" class="pub-form__textarea" rows="3"
            required>{{ old('resumen', $publicacion->resumen) }}</textarea>
    </div>

    <div class="pub-form__group">
        <label class="pub-form__label">Contenido</label>
        <textarea name="body" class="pub-form__textarea" rows="6"
            required>{{ old('body', $publicacion->body) }}</textarea>
    </div>

    <div class="pub-form__actions">
        <button type="submit" class="btn-pub-save">Actualizar</button>
        <a href="{{ route('admin.publicaciones.index') }}" class="btn-pub-cancel">
            Cancelar
        </a>
    </div>
</form>
@endsection