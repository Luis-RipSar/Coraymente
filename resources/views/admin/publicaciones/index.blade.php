@extends('layouts.admin')

@section('content')
<div class="table-container">
    <h1>Publicaciones</h1>
    <a href="{{ route('admin.publicaciones.create') }}" class="btn-primary mb-4">
        Nueva publicación
    </a>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Resumen</th>
                <th>Body</th>
                <th>Imagen URL</th>
                <th>Publicado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($publicaciones as $pub)
            <tr>
                <td>{{ $pub->titulo }}</td>
                <td>{{ $pub->resumen }}</td>
                <td>{{ $pub->body }}</td>
                <td>
                    @if($pub->image_url)
                    <img src="{{ asset($pub->image_url) }}" alt="{{ $pub->titulo }}" width="500">
                    @else
                    —
                    @endif
                </td>
                <td>
                    {{ $pub->published_at
                    ? $pub->published_at->format('d/m/Y H:i')
                    : 'No publicado' }}
                </td>
                <td class="space-x-2">
                    <a href="{{ route('admin.publicaciones.edit', $pub) }}" class="btn-warning">
                        Editar
                    </a>
                    <form action="{{ route('admin.publicaciones.destroy',$pub) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn-danger"
                            onclick="return confirm('¿Eliminar esta publicación?')">
                            Borrar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection