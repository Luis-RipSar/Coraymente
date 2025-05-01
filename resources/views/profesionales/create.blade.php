@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.usuarios.store') }}" method="POST" class="usuarios-form">
    @csrf

    <h1 class="text-2xl font-bold mb-6">Crear nuevo usuario</h1>

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input id="nombre" type="text" name="nombre" value="{{ old('nombre') }}" required>
    </div>

    <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input id="apellidos" type="text" name="apellidos" value="{{ old('apellidos') }}" required>
    </div>

    <div class="form-group">
        <label for="email">Correo</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div class="form-group">
        <label for="password">Contraseña</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input id="telefono" type="text" name="telefono" value="{{ old('telefono') }}" required>
    </div>

    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input id="direccion" type="text" name="direccion" value="{{ old('direccion') }}" required>
    </div>

    <div class="form-group">
        <label for="ciudad">Ciudad</label>
        <input id="ciudad" type="text" name="ciudad" value="{{ old('ciudad') }}" required>
    </div>

    <div class="form-group">
        <label for="role_id">Rol</label>
        <select id="role_id" name="role_id" required>
            @foreach($roles as $rol)
            @if(in_array($rol->id, [2,3]))
            <option value="{{ $rol->id }}" {{ old('role_id')==$rol->id ? 'selected' : '' }}>
                {{ $rol->nombre }}
            </option>
            @endif
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn-primary mt-4">
        Crear
    </button>
</form>
@endsection