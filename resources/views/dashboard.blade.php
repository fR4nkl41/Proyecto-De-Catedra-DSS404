<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1 class="mb-4">Panel Administrativo - Iron Pulse Gym</h1>

    <div class="row">

        <div class="col-md-3 mb-3">
            <a href="{{ route('planes.index') }}" class="btn btn-primary w-100 p-4">
                Planes
            </a>
        </div>

        <div class="col-md-3 mb-3">
            <a href="{{ route('horarios.index') }}" class="btn btn-success w-100 p-4">
                Horarios
            </a>
        </div>

        <div class="col-md-3 mb-3">
            <a href="{{ route('inscripciones.index') }}" class="btn btn-warning w-100 p-4">
                Inscripciones
            </a>
        </div>

    </div>

    <hr>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit" class="btn btn-danger">
            Cerrar sesión
        </button>
    </form>

</div>

</body>
</html>