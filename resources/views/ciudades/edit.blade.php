@extends('layouts.app')

@section('content')
<h2>Editar Ciudad</h2>
<form action="{{ route('ciudades.update', ['ciudad' => $ciudad->codigo_pk]) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ $ciudad->nombre }}" required>
    </div>
    <div class="mb-3">
        <label>Código Postal</label>
        <input type="text" name="codigo_postal" class="form-control" value="{{ $ciudad->codigo_postal }}">
    </div>
    <div class="mb-3">
        <label>País</label>
        <input type="text" name="pais" class="form-control" value="{{ $ciudad->pais }}">
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection