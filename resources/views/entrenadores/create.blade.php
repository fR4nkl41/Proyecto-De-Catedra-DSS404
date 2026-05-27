<!DOCTYPE html>
<html>
<head>

    <title>Nuevo Entrenador</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h1>Nuevo Entrenador</h1>

@if($errors->any())

<div class="alert alert-danger">

    @foreach($errors->all() as $error)

        <p>{{ $error }}</p>

    @endforeach

</div>

@endif

<form action="{{ route('entrenadores.store') }}"
      method="POST">

    @csrf

    <div class="mb-3">

        <label>Nombre</label>

        <input type="text"
               name="nombre"
               class="form-control"
               required>

    </div>

    <div class="mb-3">

        <label>Especialidad</label>

                <select name="especialidad"
                class="form-select"
                required>

            <option value="">
                Seleccione especialidad
            </option>

            <option value="Hipertrofia">
                Hipertrofia
            </option>

            <option value="Levantamiento de Potencia">
                Levantamiento de Potencia
            </option>

            <option value="Cardio HIIT">
                Cardio HIIT
            </option>

            <option value="Spinning">
                Spinning
            </option>

            <option value="CrossFit">
                CrossFit
            </option>

            <option value="Acondicionamiento Físico">
                Acondicionamiento Físico
            </option>

            <option value="Musculación">
                Musculación
            </option>

            <option value="Entrenamiento Funcional">
                Entrenamiento Funcional
            </option>

            <option value="Yoga">
                Yoga
            </option>

            <option value="Pilates">
                Pilates
            </option>

            <option value="Zumba">
                Zumba
            </option>

            <option value="Boxeo">
                Boxeo
            </option>

            <option value="Kickboxing">
                Kickboxing
            </option>

            <option value="TRX">
                TRX
            </option>

            <option value="Calistenia">
                Calistenia
            </option>

            <option value="Nutrición Deportiva">
                Nutrición Deportiva
            </option>

            <option value="Entrenamiento Personalizado">
                Entrenamiento Personalizado
            </option>

            <option value="Rehabilitación Física">
                Rehabilitación Física
            </option>

            <option value="Resistencia Física">
                Resistencia Física
            </option>

            <option value="Body Combat">
                Body Combat
            </option>

            <option value="Body Pump">
                Body Pump
            </option>

        </select>
    </div>

    <button type="submit"
            class="btn btn-success">

        Guardar

    </button>

    <a href="{{ route('entrenadores.index') }}"
       class="btn btn-secondary">

       Volver

    </a>

</form>

</div>

</body>
</html>