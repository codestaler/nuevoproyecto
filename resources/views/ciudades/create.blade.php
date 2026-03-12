@extends('layouts.app')

@section('content')
<h2>Registrar Nueva Ciudad</h2>

<form action="{{ route('ciudades.store') }}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label>Nombre de la Ciudad</label>
        <input type="text" name="nombre" class="form-control" required placeholder="Ej: Medellín">
    </div>

    <div class="mb-3">
        <label>Código Postal</label>
        <input type="text" name="codigo_postal" class="form-control" required placeholder="Ej: 050010">
    </div>

    <div class="mb-3">
        <label>País</label>
        <input type="text" name="pais" class="form-control" required placeholder="Ej: Colombia">
    </div>

    <button type="submit" class="btn btn-success">Guardar Ciudad</button>
    <a href="{{ route('ciudades.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection