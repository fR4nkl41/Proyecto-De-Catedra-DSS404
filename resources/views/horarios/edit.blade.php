<!DOCTYPE html>
<html>
<head>
    <title>Editar Horario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h1>Editar Horario</h1>

<form action="{{ route('horarios.update', $horario->id_horario) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Actividad</label>

        <input type="text"
               name="actividad"
               class="form-control"
               value="{{ $horario->actividad }}">
    </div>

    <div class="mb-3">
        <label>Día</label>

        <input type="text"
               name="dia"
               class="form-control"
               value="{{ $horario->dia }}">
    </div>

    <div class="mb-3">
        <label>Hora Inicio</label>

        <input type="time"
               name="hora_inicio"
               class="form-control"
               value="{{ $horario->hora_inicio }}">
    </div>

    <div class="mb-3">
        <label>Hora Fin</label>

        <input type="time"
               name="hora_fin"
               class="form-control"
               value="{{ $horario->hora_fin }}">
    </div>

    <div class="mb-3">
        <label>ID Entrenador</label>

        <input type="number"
               name="id_entrenador"
               class="form-control"
               value="{{ $horario->id_entrenador }}">
    </div>

    <button type="submit"
            class="btn btn-primary">

        Actualizar

    </button>

</form>

</div>

</body>
</html>