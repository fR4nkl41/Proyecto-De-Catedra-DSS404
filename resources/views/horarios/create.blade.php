<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Horario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h1>Nuevo Horario</h1>

<form action="{{ route('horarios.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Actividad</label>

        <input type="text"
               name="actividad"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Día</label>

        <input type="text"
               name="dia"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Hora Inicio</label>

        <input type="time"
               name="hora_inicio"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Hora Fin</label>

        <input type="time"
               name="hora_fin"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>ID Entrenador</label>

        <input type="number"
               name="id_entrenador"
               class="form-control">
    </div>

    <button type="submit"
            class="btn btn-success">

        Guardar

    </button>

</form>

</div>

</body>
</html>