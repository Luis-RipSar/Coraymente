@extends('layouts.admin')

@section('content')
<div class="table-container">
    <h1>Todas las Citas</h1>

    <a href="{{ route('admin.citas.create') }}" class="btn btn-primary mb-3">
        Crear nueva cita
    </a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($citas->isEmpty())
    <p>No hay citas registradas.</p>
    @else
    <table class="table">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Profesional</th>
                <th>Sede</th>
                <th>Sala</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Motivo</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($citas as $cita)
            <tr>
                <form action="{{ route('admin.citas.update') }}" method="POST">
                    @csrf @method('PUT')
                    <input type="hidden" name="id" value="{{ $cita->id }}" required>
                    <input type="hidden" name="id_usuario" value="{{ $cita->usuario->id }}" required>
                    <input type="hidden" name="id_profesional" value="{{ $cita->profesional->id }}">
                    <input type="hidden" name="sede" value="{{ $cita->sede  }}" required>
                    <input type="hidden" name="sala" value="{{ $cita->sala  }}" required>
                    <input type="hidden" name="motivo" value="{{ $cita->motivo  }}" required>

                    <td>{{ $cita->usuario->nombre }}</td>
                    <td>{{ $cita->profesional->nombre }}</td>
                    <td>{{ $cita->sede }}</td>
                    <td>{{ $cita->sala }}</td>

                    <td>
                        <input type="datetime-local" name="fecha"
                            value="{{ old('fecha', \Carbon\Carbon::parse($cita->fecha)->format('Y-m-d\TH:i')) }}"
                            class="form-control form-control-sm">
                    </td>

                    <td>
                        <select name="estado" class="form-select form-select-sm">
                            @foreach(['pendiente','confirmada','cancelada'] as $estado)
                            <option value="{{ $estado }}" {{ old('estado', $cita->estado) === $estado ? 'selected' : ''
                                }}>
                                {{ ucfirst($estado) }}
                            </option>
                            @endforeach
                        </select>
                    </td>

                    <td>{{ $cita->motivo }}</td>

                    <td>
                        <button type="submit" class="btn btn-sm btn-warning">
                            Guardar
                        </button>
                    </td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection