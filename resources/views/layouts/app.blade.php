<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Clínica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Mi Clínica</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('pacientes.index') }}">Pacientes</a>
                <a class="nav-link" href="{{ route('paises.index') }}">Países</a>
                <a class="nav-link" href="{{ route('empleados.index') }}">Empleados</a>
                <a class="nav-link" href="{{ route('ciudades.index') }}">Ciudades</a>
                <a class="nav-link" href="{{ route('sedes.index') }}">Sedes</a>
                </div>
        </div>
    </nav>

    <div class="container">
        @yield('content') </div>
</body>
</html>