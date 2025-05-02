@extends('layouts.admin')

{{-- resources/views/usuarios/index.blade.php --}}
@section('content')

<div class="table-container">
    <h1>Pacientes</h1>
    <a href="{{ route('admin.usuarios.create') }}" class="btn btn-primary mb-3">Crear nuevo paciente</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->apellidos }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>{{ $usuario->direccion }}</td>
                <td>{{ $usuario->ciudad }}</td>
                <td>
                    <a href="{{ route('admin.usuarios.edit', $usuario) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('admin.usuarios.destroy', $usuario) }}" method="POST"
                        style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('¿Eliminar a {{ $usuario->nombre }}?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection