<!DOCTYPE html>
<html>
<head>

    <title>Editar Entrenador</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h1>Editar Entrenador</h1>

@if($errors->any())

<div class="alert alert-danger">

    @foreach($errors->all() as $error)

        <p>{{ $error }}</p>

    @endforeach

</div>

@endif

<form action="{{ route('entrenadores.update', $entrenador->id_entrenador) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Nombre</label>

        <input type="text"
               name="nombre"
               class="form-control"
               value="{{ $entrenador->nombre }}"
               required>

    </div>

    <div class="mb-3">

        <label>Especialidad</label>

        <input type="text"
               name="especialidad"
               class="form-control"
               value="{{ $entrenador->especialidad }}"
               required>

    </div>

    <button type="submit"
            class="btn btn-primary">

        Actualizar

    </button>

    <a href="{{ route('entrenadores.index') }}"
       class="btn btn-secondary">

       Volver

    </a>

</form>

</div>

</body>
</html>