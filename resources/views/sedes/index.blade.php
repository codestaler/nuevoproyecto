@extends('layouts.app')

@section('content')
<h2>Lista de Sedes</h2>
<a href="{{ route('sedes.create') }}" class="btn btn-primary mb-3">Nueva Sede</a>

<table class="table">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sedes as $sede)
        <tr>
            <td>{{ $sede->codigo_unico_pk }}</td>
            <td>{{ $sede->nombre }}</td>
            <td>{{ $sede->ciudad ? $sede->ciudad->nombre : 'Sin ciudad' }}</td>
            <td>
                <a href="{{ route('sedes.edit', $sede->codigo_unico_pk) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('sedes.destroy', $sede->codigo_unico_pk) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('¿Seguro?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection