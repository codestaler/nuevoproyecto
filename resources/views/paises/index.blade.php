@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h1>Lista de Países</h1>
    <a href="{{ route('paises.create') }}" class="btn btn-success">Nuevo País</a>
</div>

{{-- Bloque de alertas --}}
@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($paises as $pais)
        <tr>
            <td>{{ $pais->codigo_unico_pk }}</td>
            <td>{{ $pais->nombre }}</td>
            <td>
                <a href="{{ route('paises.edit', $pais->codigo_unico_pk) }}" class="btn btn-warning btn-sm">Editar</a>
                
                <form action="{{ route('paises.destroy', $pais->codigo_unico_pk) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Seguro que deseas eliminar este país?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection