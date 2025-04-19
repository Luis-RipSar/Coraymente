<x-app-layout>
    <x-slot name="header">Editar Usuario</x-slot>

    <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
        @csrf @method('PUT')

        <div>
            <label>Nombre</label>
            <input type="text" name="name" value="{{ $usuario->name }}" required>
        </div>

        <div>
            <label>Correo</label>
            <input type="email" name="email" value="{{ $usuario->email }}" required>
        </div>

        <div>
            <label>Rol</label>
            <select name="rol_id">
                @foreach($roles as $rol)
                <option value="{{ $rol->id }}" {{ $usuario->rol_id == $rol->id ? 'selected' : '' }}>{{ $rol->nombre }}
                </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Actualizar</button>
    </form>
</x-app-layout>