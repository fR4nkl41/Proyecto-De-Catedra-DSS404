<!DOCTYPE html>
<html>
<head>
    <title>Editar Inscripción</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h1>Editar Inscripción</h1>

<form action="{{ route('inscripciones.update', $inscripcion->id_inscripcion) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>ID Usuario</label>

        <input type="number"
               name="id_usuario"
               class="form-control"
               value="{{ $inscripcion->id_usuario }}">
    </div>

    <div class="mb-3">
        <label>ID Plan</label>

        <input type="number"
               name="id_plan"
               class="form-control"
               value="{{ $inscripcion->id_plan }}">
    </div>

    <div class="mb-3">
        <label>Fecha Inicio</label>

        <input type="date"
               name="fecha_inicio"
               class="form-control"
               value="{{ $inscripcion->fecha_inicio }}">
    </div>

    <div class="mb-3">
        <label>Estado</label>

        <input type="text"
               name="estado"
               class="form-control"
               value="{{ $inscripcion->estado }}">
    </div>

    <button type="submit"
            class="btn btn-primary">

        Actualizar

    </button>

</form>

</div>

</body>
</html>