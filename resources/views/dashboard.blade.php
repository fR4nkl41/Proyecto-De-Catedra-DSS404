<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - Iron Pulse Gym</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body class="bg-light">

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">

    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            <i class="fa-solid fa-dumbbell"></i>
            Iron Pulse Gym
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn btn-outline-warning">

                <i class="fa-solid fa-right-from-bracket"></i>

                Cerrar sesión

            </button>

        </form>

    </div>

</nav>

<!-- CONTENIDO -->

<div class="container mt-5">

    <!-- TITULO -->

    <div class="text-center mb-5">

        <h1 class="fw-bold">

            Panel Administrativo

        </h1>

        <p class="text-muted fs-5">

            Bienvenido,
            <strong>{{ Auth::user()->nombre }}</strong>

        </p>

    </div>

    <!-- TARJETAS -->

    <div class="row g-4">

        <!-- PLANES -->

        <div class="col-md-3">

            <a href="{{ route('planes.index') }}"
               class="text-decoration-none">

                <div class="card shadow border-0 h-100">

                    <div class="card-body text-center">

                        <i class="fa-solid fa-file-lines fa-3x text-primary mb-3"></i>

                        <h4 class="fw-bold text-dark">

                            Planes

                        </h4>

                        <p class="text-muted">

                            Administrar planes del gimnasio

                        </p>

                    </div>

                </div>

            </a>

        </div>

        <!-- HORARIOS -->

        <div class="col-md-3">

            <a href="{{ route('horarios.index') }}"
               class="text-decoration-none">

                <div class="card shadow border-0 h-100">

                    <div class="card-body text-center">

                        <i class="fa-solid fa-calendar-days fa-3x text-success mb-3"></i>

                        <h4 class="fw-bold text-dark">

                            Horarios

                        </h4>

                        <p class="text-muted">

                            Gestionar horarios y actividades

                        </p>

                    </div>

                </div>

            </a>

        </div>

        <!-- INSCRIPCIONES -->

        <div class="col-md-3">

            <a href="{{ route('inscripciones.index') }}"
               class="text-decoration-none">

                <div class="card shadow border-0 h-100">

                    <div class="card-body text-center">

                        <i class="fa-solid fa-user-check fa-3x text-warning mb-3"></i>

                        <h4 class="fw-bold text-dark">

                            Inscripciones

                        </h4>

                        <p class="text-muted">

                            Controlar membresías activas

                        </p>

                    </div>

                </div>

            </a>

        </div>

        <!-- USUARIOS -->

        <div class="col-md-3">

            <a href="{{ route('usuarios.index') }}"
               class="text-decoration-none">

                <div class="card shadow border-0 h-100">

                    <div class="card-body text-center">

                        <i class="fa-solid fa-users fa-3x text-dark mb-3"></i>

                        <h4 class="fw-bold text-dark">

                            Usuarios

                        </h4>

                        <p class="text-muted">

                            Administrar usuarios y roles

                        </p>

                    </div>

                </div>

            </a>

        </div>

        <!-- ENTRENADORES -->

        <div class="col-md-3">

            <a href="{{ route('entrenadores.index') }}"
               class="text-decoration-none">

                <div class="card shadow border-0 h-100">

                    <div class="card-body text-center">

                        <i class="fa-solid fa-user-tie fa-3x text-info mb-3"></i>

                        <h4 class="fw-bold text-dark">

                            Entrenadores

                        </h4>

                        <p class="text-muted">

                            Administrar entrenadores del gimnasio

                        </p>

                    </div>

                </div>

            </a>

        </div>

    </div>

</div>

</body>
</html>