<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Paciente</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-warning">
                <h4>Editar Paciente: {{ $paciente->nombres }}</h4>
            </div>
            <div class="card-body">
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('pacientes.update', $paciente->id_paciente_pk) }}" method="POST">
                    @csrf
                    @method('PUT') 

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nombres</label>
                            <input type="text" name="nombres" class="form-control" value="{{ old('nombres', $paciente->nombres) }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" value="{{ old('apellidos', $paciente->apellidos) }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Tipo Documento</label>
                            <select name="tipo_documento" class="form-select">
                                <option value="CC" {{ old('tipo_documento', $paciente->tipo_documento) == 'CC' ? 'selected' : '' }}>Cédula</option>
                                <option value="CE" {{ old('tipo_documento', $paciente->tipo_documento) == 'CE' ? 'selected' : '' }}>Extranjería</option>
                            </select>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label class="form-label">No. Documento</label>
                            <input type="text" name="no_documento" class="form-control" value="{{ old('no_documento', $paciente->no_documento) }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $paciente->email) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nac" class="form-control" value="{{ old('fecha_nac', $paciente->fecha_nac) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Teléfono Móvil</label>
                        <input type="text" name="telef_movil" class="form-control" value="{{ old('telef_movil', $paciente->telef_movil) }}" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Ciudad</label>
                            <select name="ciudad_fk" class="form-select" required>
                                @foreach($ciudades as $ciudad)
                                    <option value="{{ $ciudad->codigo_pk }}" {{ old('ciudad_fk', $paciente->ciudad_fk) == $ciudad->codigo_pk ? 'selected' : '' }}>
                                        {{ $ciudad->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">País</label>
                            <select name="pais_fk" class="form-select" required>
                                @foreach($paises as $pais)
                                    <option value="{{ $pais->codigo_unico_pk }}" {{ old('pais_fk', $paciente->pais_fk) == $pais->codigo_unico_pk ? 'selected' : '' }}>
                                        {{ $pais->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('pacientes.index') }}" class="btn btn-secondary me-2">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Actualizar Paciente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>