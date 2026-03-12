@extends('layouts.app')

@section('content')
<h2>Editar Empleado: {{ $empleado->nombres }} {{ $empleado->apellidos }}</h2>

<form action="{{ route('empleados.update', $empleado->numero_legajo_pk) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Número de Legajo (ID)</label>
            <input type="text" class="form-control" value="{{ $empleado->numero_legajo_pk }}" readonly disabled>
            <small class="text-muted">El legajo no se puede modificar.</small>
        </div>
        <div class="col-md-6 mb-3">
            <label>Tipo Documento</label>
            <select name="tipo_documento" class="form-control" required>
                <option value="CC" {{ $empleado->tipo_documento == 'CC' ? 'selected' : '' }}>Cédula</option>
                <option value="CE" {{ $empleado->tipo_documento == 'CE' ? 'selected' : '' }}>Extranjería</option>
                <option value="PAS" {{ $empleado->tipo_documento == 'PAS' ? 'selected' : '' }}>Pasaporte</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Nombres</label>
            <input type="text" name="nombres" class="form-control" value="{{ $empleado->nombres }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Apellidos</label>
            <input type="text" name="apellidos" class="form-control" value="{{ $empleado->apellidos }}" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label>No. Documento</label>
            <input type="text" name="no_documento" class="form-control" value="{{ $empleado->no_documento }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Fecha de Alta</label>
            <input type="date" name="fecha_alta" class="form-control" value="{{ $empleado->fecha_alta }}" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $empleado->email }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Teléfono Móvil</label>
            <input type="text" name="telef_movil" class="form-control" value="{{ $empleado->telef_movil }}" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Rol</label>
            <select name="rol_fk" class="form-control" required>
                @foreach($roles as $rol)
                    <option value="{{ $rol->id_rol_pk }}" {{ $empleado->rol_fk == $rol->id_rol_pk ? 'selected' : '' }}>
                        {{ $rol->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label>Sede</label>
            <select name="sede_fk" class="form-control" required>
                @foreach($sedes as $sede)
                    <option value="{{ $sede->codigo_unico_pk }}" {{ $empleado->sede_fk == $sede->codigo_unico_pk ? 'selected' : '' }}>
                        {{ $sede->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-warning">Actualizar Empleado</button>
    <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection