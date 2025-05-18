@extends('layouts.admin')

@section('content')


<form action="{{ route('admin.citas.store') }}" method="POST" class="pub-form">
    @csrf
    <h1 class="text-2xl font-bold mb-4">Crear nueva Cita</h1>
    {{-- Usuario --}}
    <div class="pub-form__group">
        <label for="id_usuario">Usuario</label>
        <select name="id_usuario" id="id_usuario"
            class="w-full border rounded p-2 @error('id_usuario') border-red-500 @enderror">
            <option value="">-- Selecciona un usuario --</option>
            @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id }}" {{ old('id_usuario')==$usuario->id ? 'selected' : '' }}>
                {{ $usuario->nombre }} {{ $usuario->apellidos }}
            </option>
            @endforeach
        </select>
        @error('id_usuario')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Profesional --}}
    <div class="pub-form__group">
        <label for="id_profesional">Profesional</label>
        <select name="id_profesional" id="id_profesional"
            class="w-full border rounded p-2 @error('id_profesional') border-red-500 @enderror">
            <option value="">-- Selecciona un profesional --</option>
            @foreach($profesionales as $profesional)
            <option value="{{ $profesional->id }}" {{ old('id_profesional')==$profesional->id ? 'selected' : '' }}>
                {{ $profesional->nombre }} {{ $profesional->apellidos }}
            </option>
            @endforeach
        </select>
        @error('id_profesional')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Sede --}}
    <div class="pub-form__group">
        <label for="sede">Sede</label>
        <input type="text" name="sede" id="sede" value="{{ old('sede') }}"
            class="w-full border rounded p-2 @error('sede') border-red-500 @enderror">
        @error('sede')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Sala --}}
    <div class="pub-form__group">
        <label for="sala">Sala</label>
        <input type="text" name="sala" id="sala" value="{{ old('sala') }}"
            class="w-full border rounded p-2 @error('sala') border-red-500 @enderror">
        @error('sala')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Fecha y hora --}}
    <div class="pub-form__group">
        <label for="fecha">Fecha y Hora</label>
        <input type="datetime-local" name="fecha" id="fecha" value="{{ old('fecha') }}"
            class="w-full border rounded p-2 @error('fecha') border-red-500 @enderror">
        @error('fecha')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Estado --}}
    <div class="pub-form__group">
        <label for="estado">Estado</label>
        <select name="estado" id="estado" class="w-full border rounded p-2 @error('estado') border-red-500 @enderror">
            @php
            $estados = ['pendiente' => 'Pendiente', 'confirmada' => 'Confirmada', 'cancelada' => 'Cancelada'];
            @endphp
            @foreach($estados as $value => $label)
            <option value="{{ $value }}" {{ old('estado')==$value ? 'selected' : '' }}>
                {{ $label }}
            </option>
            @endforeach
        </select>
        @error('estado')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Motivo --}}
    <div class="pub-form__group">
        <label for="motivo">Motivo</label>
        <textarea name="motivo" id="motivo" rows="4"
            class="w-full border rounded p-2 @error('motivo') border-red-500 @enderror">{{ old('motivo') }}</textarea>
        @error('motivo')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="pub-form__actions">
        <button type="submit" class="btn-pub-save">
            Guardar
        </button>
        <a href="{{ route('admin.citas.index') }}" class="btn-pub-cancel">
            Cancelar
        </a>
    </div>
</form>
@endsection