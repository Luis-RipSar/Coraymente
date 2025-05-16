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
                            Edad</th>
                        <th
                            class="px-5 py-3 border-b-2 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">
                            Fecha Registro</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pacientes as $paciente)
                    <tr class="hover:bg-gray-50">
                        <td class="px-5 py-5 border-b text-sm">{{ $paciente->nombre }}</td>
                        <td class="px-5 py-5 border-b text-sm">{{ $paciente->edad }}</td>
                        <td class="px-5 py-5 border-b text-sm">{{ $paciente->created_at->format('d/m/Y') }}</td>
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
                            Hora</th>
                        <th
                            class="px-5 py-3 border-b-2 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">
                            Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($citas as $cita)
                    <tr class="hover:bg-gray-50">
                        <td class="px-5 py-5 border-b text-sm">{{ $cita->paciente->nombre }}</td>
                        <td class="px-5 py-5 border-b text-sm">{{ $cita->fecha->format('d/m/Y') }}</td>
                        <td class="px-5 py-5 border-b text-sm">{{ $cita->hora }}</td>
                        <td class="px-5 py-5 border-b text-sm capitalize">{{ $cita->estado }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-5 py-5 text-center text-sm text-gray-500">No tienes citas programadas.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection