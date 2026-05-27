<!DOCTYPE html>
<html>
<head>

    <title>Usuarios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h1 class="mb-4">Usuarios</h1>

@if(session('success'))

<div class="alert alert-success">

    {{ session('success') }}

</div>

@endif

<table class="table table-hover table-striped shadow">

<thead class="table-dark">

<tr>

    <th>ID</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Rol</th>
    <th>Acciones</th>

</tr>

</thead>

<tbody>

@foreach($usuarios as $usuario)

<tr>

    <td>{{ $usuario->id_usuario }}</td>
    <td>{{ $usuario->nombre }}</td>
    <td>{{ $usuario->correo }}</td>
    <td>{{ $usuario->rol }}</td>

    <td>

        <a href="{{ route('usuarios.edit', $usuario->id_usuario) }}"
           class="btn btn-warning btn-sm">

            Editar

        </a>
        

        <form action="{{ route('usuarios.destroy', $usuario->id_usuario) }}"
              method="POST"
              style="display:inline;">

            @csrf
            @method('DELETE')

            <button type="submit"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('¿Eliminar usuario?')">

                Eliminar

            </button>

        </form>

    </td>

</tr>

@endforeach

</tbody>

</table>

<a href="{{ route('dashboard') }}"
   class="btn btn-secondary">

   Volver al Dashboard

</a>

</div>

</body>
</html>