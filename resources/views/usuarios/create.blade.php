<x-app-layout>
    <x-slot name="header">Crear Usuario</x-slot>

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div>
            <label>Nombre</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label>Correo</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label>Contraseña</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <label>Rol</label>
            <select name="rol_id">
                @foreach($roles as $rol)
                @if ($rol->id == 2 || $rol->id == 3)
                <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                @endif
                @endforeach
            </select>
        </div>

        <button type="submit">Crear</button>
    </form>
</x-app-layout>