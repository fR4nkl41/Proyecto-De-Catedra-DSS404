<!DOCTYPE html>
<html>
<head>
    <title>Crear Plan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h1>Nuevo Plan</h1>

@if($errors->any())

    <div class="alert alert-danger">

        @foreach($errors->all() as $error)

            <p>{{ $error }}</p>

        @endforeach

    </div>

@endif
<form action="{{ route('planes.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre_plan" class="form-control">
    </div>

    <div class="mb-3">
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Precio</label>
        <input type="number" step="0.01" name="precio" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">
        Guardar
    </button>

</form>

</div>

</body>
</html>