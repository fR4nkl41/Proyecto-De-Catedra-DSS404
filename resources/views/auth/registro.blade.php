<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - IronPulse Gym</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h2 class="text-center mb-4">IronPulse Gym</h2>
            <div class="card bg-secondary">
                <div class="card-body">
                    <h4 class="card-title mb-3">Crear Cuenta</h4>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p class="mb-0">{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <form method="POST" action="{{ route('registro') }}">
                        @csrf
                        <div class="mb-3">
                            <label>Nombre completo</label>
                            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>                        <div class="mb-3">
                            <label>Correo electrónico</label>
                            <input type="email" name="correo" class="form-control" value="{{ old('correo') }}" required>                        </div>
                        <div class="mb-3">
                            <label>Contraseña</label>
                            <input type="password" name="contrasena" class="form-control" required>                        </div>
                        <div class="mb-3">
                            <label>Confirmar contraseña</label>
                            <input type="password" name="contrasena_confirmation" class="form-control" required>                        </div>
                        <button type="submit" class="btn btn-warning w-100">Registrarse</button>
                    </form>

                    <p class="mt-3 text-center">¿Ya tienes cuenta? <a href="{{ route('login') }}" class="text-warning">Inicia sesión</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>