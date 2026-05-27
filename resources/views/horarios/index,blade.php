<!DOCTYPE html>
<html>
<head>
    <title>Horarios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Lista de Horarios</h1>

    <a href="{{ route('horarios.create') }}" class="btn btn-primary mb-3">
        Nuevo Horario
    </a>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Actividad</th>
                <th>Día</th>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
                <th>Entrenador</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

            @foreach($horarios as $horario)

            <tr>

                <td>{{ $horario->id_horario }}</td>
                <td>{{ $horario->actividad }}</td>
                <td>{{ $horario->dia }}</td>
                <td>{{ $horario->hora_inicio }}</td>
                <td>{{ $horario->hora_fin }}</td>
                <td>{{ $horario->id_entrenador }}</td>

                <td>

                    <a href="{{ route('horarios.edit', $horario->id_horario) }}"
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <form action="{{ route('horarios.destroy', $horario->id_horario) }}"
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