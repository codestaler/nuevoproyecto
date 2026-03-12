@extends('layouts.app')

@section('content')
<h2>Editar País: {{ $pais->nombre }}</h2>
<form action="{{ route('paises.update', $pais->codigo_unico_pk) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nombre del País</label>
        <input type="text" name="nombre" class="form-control" value="{{ $pais->nombre }}" required>
    </div>
    <button type="submit" class="btn btn-warning">Actualizar País</button>
    <a href="{{ route('paises.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection