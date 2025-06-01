@extends('layouts.app')

@section('content')
<div class="container mx-auto py-16">
    <h1 class="text-3xl font-bold mb-6">Bienvenido, {{ Auth::user()->nombre }}</h1>

    <div class="grid gap-8 lg:grid-cols-2">
        <!-- Listado de Pacientes -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b">
                <h2 class="text-2xl font-semibold">Mis Pacientes</h2>
            </div>
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">
                            Nombre</th>
                        <th
                            class="px-5 py-3 border-b-2 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">
                            Teléfono</th>
                        <th
                            class="px-5 py-3 border-b-2 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">
                            Ciudad</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pacientes as $paciente)
                    <tr class="hover:bg-gray-50">
                        <td class="px-5 py-5 border-b text-sm">{{ $paciente->nombre }}</td>
                        <td class="px-5 py-5 border-b text-sm">{{ $paciente->telefono }}</td>
                        <td class="px-5 py-5 border-b text-sm">{{ $paciente->ciudad }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-5 py-5 text-center text-sm text-gray-500">No tienes pacientes
                            asignados.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Listado de Citas -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b">
                <h2 class="text-2xl font-semibold">Mis Citas</h2>
            </div>
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">
                            Paciente</th>
                        <th
                            class="px-5 py-3 border-b-2 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">
                            Fecha</th>
                        <th
                            class="px-5 py-3 border-b-2 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">
                            Estado</th>
                        <th
                            class="px-5 py-3 border-b-2 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">
                            Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($citas as $cita)
                    <tr class="hover:bg-gray-50">
                        <td class="px-5 py-5 border-b text-sm">{{ $cita->usuario->nombre }}</td>
                        <td class="px-5 py-5 border-b text-sm">{{ \Carbon\Carbon::parse($cita->fecha)->format('d/m/Y
                            H:i') }}
                        </td>

                        {{-- Celda con formulario inline para cambiar sólo el estado --}}
                        <td class="px-5 py-5 border-b text-sm">
                            <form action="{{ route('profesional.citas.update', $cita) }}" method="POST"
                                class="flex items-center space-x-2">
                                @csrf
                                @method('PATCH')

                                <select name="estado"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-300">
                                    @foreach(['pendiente','confirmada','cancelada'] as $st)
                                    <option value="{{ $st }}" @selected($cita->estado === $st)>
                                        {{ ucfirst($st) }}
                                    </option>
                                    @endforeach
                                </select>
                        </td>
                        <td class="px-5 py-5 border-b text-sm">
                            <input type="hidden" name="id" value="{{ $cita->id }}" required>
                            <input type="hidden" name="id_usuario" value="{{ $cita->usuario->id }}" required>
                            <input type="hidden" name="id_profesional" value="{{ $cita->profesional->id }}">
                            <input type="hidden" name="sede" value="{{ $cita->sede  }}" required>
                            <input type="hidden" name="sala" value="{{ $cita->sala  }}" required>
                            <input type="hidden" name="motivo" value="{{ $cita->motivo  }}" required>
                            <input type="hidden" name="fecha" value="{{ $cita->fecha  }}" required>
                            <button type="submit"
                                class="inline-flex px-3 py-1 bg-yellow-500 text-white text-sm font-medium rounded hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-300">
                                Guardar
                            </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-5 py-5 text-center text-sm text-gray-500">
                            No tienes citas programadas.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection