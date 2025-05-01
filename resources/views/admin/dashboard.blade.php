{{-- resources/views/admin/dashboard.blade.php --}}
@extends('layouts.admin')

@section('content')
<div class="table-container">
    <h1>Panel de Administración</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        {{-- Ejemplo de tarjeta resumen --}}
        <div class="bg-white shadow rounded-lg p-4">
            <h2 class="text-sm font-semibold text-gray-500">Usuarios totales</h2>
            <p class="text-2xl font-bold">{{ \App\Models\UserModel::count() }}</p>
        </div>

        <div class="bg-white shadow rounded-lg p-4">
            <h2 class="text-sm font-semibold text-gray-500">Profesionales</h2>
            <p class="text-2xl font-bold">{{ \App\Models\UserModel::where('role_id',2)->count() }}</p>
        </div>

        <div class="bg-white shadow rounded-lg p-4">
            <h2 class="text-sm font-semibold text-gray-500">Pacientes</h2>
            <p class="text-2xl font-bold">{{ \App\Models\UserModel::where('role_id',3)->count() }}</p>
        </div>

        <div class="bg-white shadow rounded-lg p-4">
            <h2 class="text-sm font-semibold text-gray-500">Citas pendientes</h2>
            <p class="text-2xl font-bold">{{ \App\Models\CitaModel::where('estado','pendiente')->count() }}</p>
        </div>
    </div>

    {{-- Última actividad --}}
    <div class="mt-12 bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Últimos registros</h2>
        <ul class="divide-y divide-gray-200">
            @foreach(\App\Models\UserModel::latest()->take(5)->get() as $u)
            <li class="py-2 flex justify-between">
                <span>{{ $u->nombre }} {{ $u->apellidos }}</span>
                <span class="text-gray-500 text-sm">{{ $u->created_at->diffForHumans() }}</span>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection