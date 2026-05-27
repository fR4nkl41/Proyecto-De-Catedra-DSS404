<!DOCTYPE html>
<html>
<head>
    <title>Editar Plan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h1>Editar Plan</h1>

<form action="{{ route('planes.update', $plan->id_plan) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre_plan" class="form-control" value="{{ $plan->nombre_plan }}">
    </div>

    <div class="mb-3">
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control">{{ $plan->descripcion }}</textarea>
    </div>

    <div class="mb-3">
        <label>Precio</label>
        <input type="number" step="0.01" name="precio" class="form-control" value="{{ $plan->precio }}">
    </div>

    <button type="submit" class="btn btn-primary">
        Actualizar
    </button>

</form>

</div>

</body>
</html>