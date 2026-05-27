<!DOCTYPE html>

<div class="container mt-5">

    <h1 class="mb-4">Lista de Planes</h1>

    <a href="{{ route('planes.create') }}" class="btn btn-primary mb-3">
        Nuevo Plan
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

        @foreach($planes as $plan)

            <tr>
                <td>{{ $plan->id_plan }}</td>
                <td>{{ $plan->nombre_plan }}</td>
                <td>{{ $plan->descripcion }}</td>
                <td>${{ $plan->precio }}</td>

                <td>
                    <a href="{{ route('planes.edit', $plan->id_plan) }}" class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <form action="{{ route('planes.destroy', $plan->id_plan) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">
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