<!DOCTYPE html>
<html>
<head>
    <title>Inscripciones</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Lista de Inscripciones</h1>

    <a href="{{ route('inscripciones.create') }}"
       class="btn btn-primary mb-3">

        Nueva Inscripción

    </a>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Plan</th>
                <th>Fecha Inicio</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

        @foreach($inscripciones as $inscripcion)

            <tr>

                <td>{{ $inscripcion->id_inscripcion }}</td>
                <td>{{ $inscripcion->id_usuario }}</td>
                <td>{{ $inscripcion->id_plan }}</td>
                <td>{{ $inscripcion->fecha_inicio }}</td>
                <td>{{ $inscripcion->estado }}</td>

                <td>

                    <a href="{{ route('inscripciones.edit', $inscripcion->id_inscripcion) }}"
                       class="btn btn-warning btn-sm">

                        Editar

                    </a>

                    <form action="{{ route('inscripciones.destroy', $inscripcion->id_inscripcion) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger btn-sm">

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