@extends('layouts.app')

@section('content')
<h2>Nuevo Empleado</h2>
<form action="{{ route('empleados.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Número de Legajo</label>
            <input type="text" name="numero_legajo_pk" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Tipo Documento</label>
            <select name="tipo_documento" class="form-control" required>
                <option value="CC">Cédula</option>
                <option value="CE">Extranjería</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Nombres</label>
            <input type="text" name="nombres" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Apellidos</label>
            <input type="text" name="apellidos" class="form-control" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label>No. Documento</label>
            <input type="text" name="no_documento" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Fecha de Alta</label>
            <input type="date" name="fecha_alta" class="form-control" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Teléfono Móvil</label>
            <input type="text" name="telef_movil" class="form-control" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Rol</label>
            <select name="rol_fk" class="form-control" required>
                @foreach($roles as $rol)
                    <option value="{{ $rol->id_rol_pk }}">{{ $rol->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label>Sede</label>
            <select name="sede_fk" class="form-control" required>
                @foreach($sedes as $sede)
                    <option value="{{ $sede->codigo_unico_pk }}">{{ $sede->nombre }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-success">Guardar Empleado</button>
</form>
@endsection