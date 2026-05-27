<!DOCTYPE html>
<html>
<head>

    <title>Entrenadores</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h1>Entrenadores</h1>

<a href="{{ route('entrenadores.create') }}"
   class="btn btn-primary mb-3">

   Nuevo Entrenador

</a>

@if(session('success'))

<div class="alert alert-success">

    {{ session('success') }}

</div>

@endif

<table class="table table-bordered">

<thead>

<tr>

    <th>ID</th>
    <th>Nombre</th>
    <th>Especialidad</th>
    <th>Acciones</th>

</tr>

</thead>

<tbody>

@foreach($entrenadores as $entrenador)

<tr>

    <td>{{ $entrenador->id_entrenador }}</td>
    <td>{{ $entrenador->nombre }}</td>
    <td>{{ $entrenador->especialidad }}</td>

    <td>

        <a href="{{ route('entrenadores.edit', $entrenador->id_entrenador) }}"
           class="btn btn-warning btn-sm">

           Editar

        </a>

        <form action="{{ route('entrenadores.destroy', $entrenador->id_entrenador) }}"
              method="POST"
              style="display:inline;">

            @csrf
            @method('DELETE')

            <button type="submit"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('¿Seguro que deseas eliminar?')">

                Eliminar

            </button>

        </form>

    </td>

</tr>

@endforeach

</tbody>

</table>

</div>

</body>
</html>