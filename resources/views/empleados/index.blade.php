@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Lista de Empleados</h2>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('empleados.create') }}" class="btn btn-primary mb-3">Nuevo Empleado</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Legajo</th>
                <th>Nombre Completo</th>
                <th>Documento</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Sede</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
            <tr>
                <td>{{ $empleado->numero_legajo_pk }}</td>
                <td>{{ $empleado->nombres }} {{ $empleado->apellidos }}</td>
                <td><small>{{ $empleado->tipo_documento }}:</small> {{ $empleado->no_documento }}</td>
                <td>{{ $empleado->email }}</td>
                
                {{-- Mostramos el nombre si la relación existe --}}
                <td>{{ $empleado->rol ? $empleado->rol->nombre : 'N/A' }}</td>
                <td>{{ $empleado->sede ? $empleado->sede->nombre : 'N/A' }}</td>
                
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a href="{{ route('empleados.edit', $empleado->numero_legajo_pk) }}" class="btn btn-warning btn-sm">
                            Editar
                        </a>

                        <form action="{{ route('empleados.destroy', $empleado->numero_legajo_pk) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar a este empleado?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Borrar
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection