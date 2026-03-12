@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Ciudades</h2>
    
    <a href="{{ route('ciudades.create') }}" class="btn btn-primary mb-3">Nueva Ciudad</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Código (PK)</th>
                <th>Nombre</th>
                <th>Código Postal</th>
                <th>País</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ciudades as $ciudad)
            <tr>
                <td>{{ $ciudad->codigo_pk }}</td>
                <td>{{ $ciudad->nombre }}</td>
                <td>{{ $ciudad->codigo_postal }}</td>
                <td>{{ $ciudad->pais }}</td>
                <td>
                    <a href="{{ route('ciudades.edit', $ciudad->codigo_pk) }}" class="btn btn-warning btn-sm">Editar</a>
                    
                    <form action="{{ route('ciudades.destroy', $ciudad->codigo_pk) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta ciudad?')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection