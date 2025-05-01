@extends('layouts.admin')

{{-- resources/views/profesionales/index.blade.php --}}
@section('content')

<div class="table-container">
    <h1>Profesionales</h1>
    <a href="{{ route('admin.profesionales.create') }}" class="btn btn-primary mb-3">Crear nuevo profesional</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profesionales as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->apellidos }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>
                    <a href="{{ route('admin.profesionales.edit', $usuario) }}"
                        class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('admin.profesionales.delete', $usuario) }}" method="POST"
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