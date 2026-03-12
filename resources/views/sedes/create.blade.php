@extends('layouts.app')

@section('content')
<h2>Nueva Sede</h2>
<form action="{{ route('sedes.store') }}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label>Nombre de la Sede</label>
        <input type="text" name="nombre" class="form-control" required placeholder="Ej: Sede Norte">
    </div>

    <div class="mb-3">
        <label>Ciudad</label>
        <select name="ciudad_fk" class="form-control" required>
            <option value="">Seleccione una ciudad...</option>
            @foreach($ciudades as $ciudad)
                <option value="{{ $ciudad->codigo_pk }}">{{ $ciudad->nombre }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-success">Guardar Sede</button>
    <a href="{{ route('sedes.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection