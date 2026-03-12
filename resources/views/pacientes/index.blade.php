@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2>Lista de Pacientes</h2>
        <a href="{{ route('pacientes.create') }}" class="btn btn-primary">Nuevo Paciente</a>
    </div>

    <table class="table mt-3 table-hover">
        <thead class="table-light">
            <tr>
                <th>Nombre Completo</th>
                <th>Tipo Doc</th>
                <th>No. Documento</th>
                <th>Fecha Nac</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->nombres }} {{ $paciente->apellidos }}</td>
                <td>{{ $paciente->tipo_documento }}</td>
                <td>{{ $paciente->no_documento }}</td>
                <td>{{ $paciente->fecha_nac }}</td>
                <td>{{ $paciente->email }}</td>
                <td>{{ $paciente->telef_movil }}</td>
                <td>
                    <a href="{{ route('pacientes.edit', $paciente->id_paciente_pk) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('pacientes.destroy', $paciente->id_paciente_pk) }}" method="POST" class="d-inline">
                        @csrf 
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection