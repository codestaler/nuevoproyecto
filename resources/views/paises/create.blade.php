@extends('layouts.app')

@section('content')
<h2>Nuevo País</h2>
<form action="{{ route('paises.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nombre del País</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Guardar País</button>
    <a href="{{ route('paises.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection