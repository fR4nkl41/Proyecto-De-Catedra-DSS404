<!DOCTYPE html>
<html>
<head>

    <title>Editar Usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h1 class="mb-4">Editar Usuario</h1>

@if($errors->any())

<div class="alert alert-danger">

    @foreach($errors->all() as $error)

        <p>{{ $error }}</p>

    @endforeach

</div>

@endif

<form action="{{ route('usuarios.update', $usuario->id_usuario) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Nombre</label>

        <input type="text"
               class="form-control"
               value="{{ $usuario->nombre }}"
               disabled>

    </div>

    <div class="mb-3">

        <label>Correo</label>

        <input type="email"
               class="form-control"
               value="{{ $usuario->correo }}"
               disabled>

    </div>

    <div class="mb-3">

        <label>Rol</label>

        <select name="rol"
                class="form-select"
                required>

            <option value="Administrador"
                {{ $usuario->rol == 'Administrador' ? 'selected' : '' }}>

                Administrador

            </option>

            <option value="Cliente"
                {{ $usuario->rol == 'Cliente' ? 'selected' : '' }}>

                Cliente

            </option>

        </select>

    </div>

    <button type="submit"
            class="btn btn-primary">

        Actualizar

    </button>

    <a href="{{ route('usuarios.index') }}"
       class="btn btn-secondary">

       Volver

    </a>

</form>

</div>

</body>
</html>