<!DOCTYPE html>
<html>
<head>

    <title>Editar Entrenador</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h1>Editar Entrenador</h1>

@if($errors->any())

<div class="alert alert-danger">

    @foreach($errors->all() as $error)

        <p>{{ $error }}</p>

    @endforeach

</div>

@endif

<form action="{{ route('entrenadores.update', $entrenador->id_entrenador) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Nombre</label>

        <input type="text"
               name="nombre"
               class="form-control"
               value="{{ $entrenador->nombre }}"
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

    <option value="Hipertrofia"
        {{ isset($entrenador) && $entrenador->especialidad == 'Hipertrofia' ? 'selected' : '' }}>
        Hipertrofia
    </option>

    <option value="Levantamiento de Potencia"
        {{ isset($entrenador) && $entrenador->especialidad == 'Levantamiento de Potencia' ? 'selected' : '' }}>
        Levantamiento de Potencia
    </option>

    <option value="Cardio HIIT"
        {{ isset($entrenador) && $entrenador->especialidad == 'Cardio HIIT' ? 'selected' : '' }}>
        Cardio HIIT
    </option>

    <option value="Spinning"
        {{ isset($entrenador) && $entrenador->especialidad == 'Spinning' ? 'selected' : '' }}>
        Spinning
    </option>

    <option value="CrossFit"
        {{ isset($entrenador) && $entrenador->especialidad == 'CrossFit' ? 'selected' : '' }}>
        CrossFit
    </option>

    <option value="Acondicionamiento Físico"
        {{ isset($entrenador) && $entrenador->especialidad == 'Acondicionamiento Físico' ? 'selected' : '' }}>
        Acondicionamiento Físico
    </option>

    <option value="Musculación"
        {{ isset($entrenador) && $entrenador->especialidad == 'Musculación' ? 'selected' : '' }}>
        Musculación
    </option>

    <option value="Entrenamiento Funcional"
        {{ isset($entrenador) && $entrenador->especialidad == 'Entrenamiento Funcional' ? 'selected' : '' }}>
        Entrenamiento Funcional
    </option>

    <option value="Yoga"
        {{ isset($entrenador) && $entrenador->especialidad == 'Yoga' ? 'selected' : '' }}>
        Yoga
    </option>

    <option value="Pilates"
        {{ isset($entrenador) && $entrenador->especialidad == 'Pilates' ? 'selected' : '' }}>
        Pilates
    </option>

    <option value="Zumba"
        {{ isset($entrenador) && $entrenador->especialidad == 'Zumba' ? 'selected' : '' }}>
        Zumba
    </option>

    <option value="Boxeo"
        {{ isset($entrenador) && $entrenador->especialidad == 'Boxeo' ? 'selected' : '' }}>
        Boxeo
    </option>

    <option value="Kickboxing"
        {{ isset($entrenador) && $entrenador->especialidad == 'Kickboxing' ? 'selected' : '' }}>
        Kickboxing
    </option>

    <option value="TRX"
        {{ isset($entrenador) && $entrenador->especialidad == 'TRX' ? 'selected' : '' }}>
        TRX
    </option>

    <option value="Calistenia"
        {{ isset($entrenador) && $entrenador->especialidad == 'Calistenia' ? 'selected' : '' }}>
        Calistenia
    </option>

    <option value="Nutrición Deportiva"
        {{ isset($entrenador) && $entrenador->especialidad == 'Nutrición Deportiva' ? 'selected' : '' }}>
        Nutrición Deportiva
    </option>

    <option value="Entrenamiento Personalizado"
        {{ isset($entrenador) && $entrenador->especialidad == 'Entrenamiento Personalizado' ? 'selected' : '' }}>
        Entrenamiento Personalizado
    </option>

    <option value="Rehabilitación Física"
        {{ isset($entrenador) && $entrenador->especialidad == 'Rehabilitación Física' ? 'selected' : '' }}>
        Rehabilitación Física
    </option>

    <option value="Resistencia Física"
        {{ isset($entrenador) && $entrenador->especialidad == 'Resistencia Física' ? 'selected' : '' }}>
        Resistencia Física
    </option>

    <option value="Body Combat"
        {{ isset($entrenador) && $entrenador->especialidad == 'Body Combat' ? 'selected' : '' }}>
        Body Combat
    </option>

    <option value="Body Pump"
        {{ isset($entrenador) && $entrenador->especialidad == 'Body Pump' ? 'selected' : '' }}>
        Body Pump
    </option>

</select>

    </div>

    <button type="submit"
            class="btn btn-primary">

        Actualizar

    </button>

    <a href="{{ route('entrenadores.index') }}"
       class="btn btn-secondary">

       Volver

    </a>

</form>

</div>

</body>
</html>