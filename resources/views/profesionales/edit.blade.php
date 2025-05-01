@extends('layouts.admin')

@section('header','Editar usuario')

@section('content')
<form action="{{ route('admin.usuarios.update',$usuario) }}" method="POST" class="usuarios-form">
    @csrf @method('PUT')

    <h1 class="text-2xl font-bold mb-6">Editar usuario</h1>

    {{-- Nombre --}}
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input id="nombre" type="text" name="nombre" value="{{ old('nombre',$usuario->nombre) }}" required>
        @error('nombre')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    {{-- Apellidos --}}
    <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input id="apellidos" type="text" name="apellidos" value="{{ old('apellidos',$usuario->apellidos) }}" required>
        @error('apellidos')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    {{-- Email --}}
    <div class="form-group">
        <label for="email">Correo</label>
        <input id="email" type="email" name="email" value="{{ old('email',$usuario->email) }}" required>
        @error('email')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    {{-- Contraseña (opcional) --}}
    <div class="form-group">
        <label for="password">Contraseña <small>(dejar vacío para no cambiarla)</small></label>
        <input id="password" type="password" name="password">
        @error('password')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    {{-- Teléfono --}}
    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input id="telefono" type="text" name="telefono" value="{{ old('telefono',$usuario->telefono) }}" required>
        @error('telefono')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    {{-- Dirección --}}
    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input id="direccion" type="text" name="direccion" value="{{ old('direccion',$usuario->direccion) }}" required>
        @error('direccion')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    {{-- Ciudad --}}
    <div class="form-group">
        <label for="ciudad">Ciudad</label>
        <input id="ciudad" type="text" name="ciudad" value="{{ old('ciudad',$usuario->ciudad) }}" required>
        @error('ciudad')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>


    <button type="submit" class="btn-primary mt-4">
        Actualizar
    </button>
</form>
@endsection