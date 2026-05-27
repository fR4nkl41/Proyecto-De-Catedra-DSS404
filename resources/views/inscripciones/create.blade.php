<!DOCTYPE html>
<html>
<head>
    <title>Nueva Inscripción</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h1>Nueva Inscripción</h1>

@if($errors->any())

<div class="alert alert-danger">

    @foreach($errors->all() as $error)

        <p>{{ $error }}</p>

    @endforeach

</div>

@endif
<form action="{{ route('inscripciones.store') }}"
      method="POST">

    @csrf

    <div class="mb-3">
        <label>ID Usuario</label>

        <input type="number"
               name="id_usuario"
               class="form-control"
               require>
    </div>

    <div class="mb-3">
        <label>ID Plan</label>

        <input type="number"
               name="id_plan"
               class="form-control"
               require>
    </div>

    <div class="mb-3">
        <label>Fecha Inicio</label>

        <input type="date"
               name="fecha_inicio"
               class="form-control"
               min="{{ date('Y-m-d') }}">
    </div>

    <div class="mb-3">
        <label>Estado</label>

        <select name="estado" class="form-select">

            <option value="Activa">Activa</option>

            <option value="Pendiente">Pendiente</option>

            <option value="Cancelada">Cancelada</option>

        </select>
    </div>

    <button type="submit"
            class="btn btn-success">

        Guardar

    </button>

</form>

</div>

</body>
</html>