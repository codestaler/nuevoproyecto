@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h1>Lista de Países</h1>
    <a href="{{ route('paises.create') }}" class="btn btn-success">Nuevo País</a>
</div>

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
                <a href="{{ route('paises.edit', $pais->codigo_unico_pk) }}" class="btn btn-warning">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection