<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Horario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h1>Nuevo Horario</h1>

@if($errors->any())

<div class="alert alert-danger">

    @foreach($errors->all() as $error)

        <p>{{ $error }}</p>

    @endforeach

</div>

@endif
<form action="{{ route('horarios.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Actividad</label>

        <select name="actividad"
        class="form-select"
        required>

    <option value="">
        Seleccione actividad
    </option>

    <option value="Spinning">
        Spinning
    </option>

    <option value="CrossFit">
        CrossFit
    </option>

    <option value="Cardio HIIT">
        Cardio HIIT
    </option>

    <option value="Entrenamiento Funcional">
        Entrenamiento Funcional
    </option>

    <option value="Pesas">
        Pesas
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

    <option value="Body Combat">
        Body Combat
    </option>

    <option value="Body Pump">
        Body Pump
    </option>

    <option value="Natación">
        Natación
    </option>

    <option value="Aeróbicos">
        Aeróbicos
    </option>

    <option value="Powerlifting">
        Powerlifting
    </option>

    <option value="Musculación">
        Musculación
    </option>

    <option value="Cardio">
        Cardio
    </option>

    <option value="Asesoría Personalizada">
        Asesoría Personalizada
    </option>

    <option value="Entrenamiento de Resistencia">
        Entrenamiento de Resistencia
    </option>

    <option value="Circuito Funcional">
        Circuito Funcional
    </option>

    <option value="Stretching">
        Stretching
    </option>

    <option value="Baile Fitness">
        Baile Fitness
    </option>

</select>
    </div>

    <div class="mb-3">
        <label>Días</label>
        <select name="dia" class="form-select">

            <option value="Lunes">Lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miércoles">Miércoles</option>
            <option value="Jueves">Jueves</option>
            <option value="Viernes">Viernes</option>
            <option value="Sábado">Sábado</option>

        </select>
    </div>

    <div class="mb-3">
        <label>Hora Inicio</label>

       <input type="time"
       name="hora_inicio"
       class="form-control"
       min="06:00"
       max="22:00">
    </div>

    <div class="mb-3">
        <label>Hora Fin</label>

        <input type="time"
               name="hora_fin"
               class="form-control"
               require>
    </div>

    <div class="mb-3">
        <label>ID Entrenador</label>

        <input type="number"
               name="id_entrenador"
               class="form-control">
    </div>

    <button type="submit"
            class="btn btn-success">

        Guardar

    </button>

</form>

</div>

</body>
</html>