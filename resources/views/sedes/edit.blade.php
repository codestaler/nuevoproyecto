@extends('layouts.app')

@section('content')
<h2>Editar Sede: {{ $sede->nombre }}</h2>
<form action="{{ route('sedes.update', $sede->codigo_unico_pk) }}" method="POST">
    @csrf @method('PUT')
    
    <div class="mb-3">
        <label>Código Único</label>
        <input type="text" class="form-control" value="{{ $sede->codigo_unico_pk }}" readonly>
    </div>
    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ $sede->nombre }}" required>
    </div>
    <div class="mb-3">
        <label>Ciudad</label>
        <select name="ciudad_fk" class="form-control" required>
            @foreach($ciudades as $ciudad)
                <option value="{{ $ciudad->codigo_pk }}" 
                    {{ $sede->ciudad_fk == $ciudad->codigo_pk ? 'selected' : '' }}>
                    {{ $ciudad->nombre }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Actualizar Sede</button>
</form>
@endsection