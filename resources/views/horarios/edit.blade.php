<!DOCTYPE html>
<html>
<head>
    <title>Editar Horario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h1>Editar Horario</h1>

<form action="{{ route('horarios.update', $horario->id_horario) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Actividad</label>

        <select name="actividad"
        class="form-select"
        required>

    <option value="">
        Seleccione actividad
    </option>

    <option value="Spinning"
        {{ isset($horario) && $horario->actividad == 'Spinning' ? 'selected' : '' }}>
        Spinning
    </option>

    <option value="CrossFit"
        {{ isset($horario) && $horario->actividad == 'CrossFit' ? 'selected' : '' }}>
        CrossFit
    </option>

    <option value="Cardio HIIT"
        {{ isset($horario) && $horario->actividad == 'Cardio HIIT' ? 'selected' : '' }}>
        Cardio HIIT
    </option>

    <option value="Entrenamiento Funcional"
        {{ isset($horario) && $horario->actividad == 'Entrenamiento Funcional' ? 'selected' : '' }}>
        Entrenamiento Funcional
    </option>

    <option value="Pesas"
        {{ isset($horario) && $horario->actividad == 'Pesas' ? 'selected' : '' }}>
        Pesas
    </option>

    <option value="Yoga"
        {{ isset($horario) && $horario->actividad == 'Yoga' ? 'selected' : '' }}>
        Yoga
    </option>

    <option value="Pilates"
        {{ isset($horario) && $horario->actividad == 'Pilates' ? 'selected' : '' }}>
        Pilates
    </option>

    <option value="Zumba"
        {{ isset($horario) && $horario->actividad == 'Zumba' ? 'selected' : '' }}>
        Zumba
    </option>

    <option value="Boxeo"
        {{ isset($horario) && $horario->actividad == 'Boxeo' ? 'selected' : '' }}>
        Boxeo
    </option>

    <option value="Kickboxing"
        {{ isset($horario) && $horario->actividad == 'Kickboxing' ? 'selected' : '' }}>
        Kickboxing
    </option>

    <option value="TRX"
        {{ isset($horario) && $horario->actividad == 'TRX' ? 'selected' : '' }}>
        TRX
    </option>

    <option value="Calistenia"
        {{ isset($horario) && $horario->actividad == 'Calistenia' ? 'selected' : '' }}>
        Calistenia
    </option>

    <option value="Body Combat"
        {{ isset($horario) && $horario->actividad == 'Body Combat' ? 'selected' : '' }}>
        Body Combat
    </option>

    <option value="Body Pump"
        {{ isset($horario) && $horario->actividad == 'Body Pump' ? 'selected' : '' }}>
        Body Pump
    </option>

    <option value="Natación"
        {{ isset($horario) && $horario->actividad == 'Natación' ? 'selected' : '' }}>
        Natación
    </option>

    <option value="Aeróbicos"
        {{ isset($horario) && $horario->actividad == 'Aeróbicos' ? 'selected' : '' }}>
        Aeróbicos
    </option>

    <option value="Powerlifting"
        {{ isset($horario) && $horario->actividad == 'Powerlifting' ? 'selected' : '' }}>
        Powerlifting
    </option>

    <option value="Musculación"
        {{ isset($horario) && $horario->actividad == 'Musculación' ? 'selected' : '' }}>
        Musculación
    </option>

    <option value="Cardio"
        {{ isset($horario) && $horario->actividad == 'Cardio' ? 'selected' : '' }}>
        Cardio
    </option>

    <option value="Asesoría Personalizada"
        {{ isset($horario) && $horario->actividad == 'Asesoría Personalizada' ? 'selected' : '' }}>
        Asesoría Personalizada
    </option>

    <option value="Entrenamiento de Resistencia"
        {{ isset($horario) && $horario->actividad == 'Entrenamiento de Resistencia' ? 'selected' : '' }}>
        Entrenamiento de Resistencia
    </option>

    <option value="Circuito Funcional"
        {{ isset($horario) && $horario->actividad == 'Circuito Funcional' ? 'selected' : '' }}>
        Circuito Funcional
    </option>

    <option value="Stretching"
        {{ isset($horario) && $horario->actividad == 'Stretching' ? 'selected' : '' }}>
        Stretching
    </option>

    <option value="Baile Fitness"
        {{ isset($horario) && $horario->actividad == 'Baile Fitness' ? 'selected' : '' }}>
        Baile Fitness
    </option>

</select>
    </div>

    <div class="mb-3">
        <label>Día</label>

        <input type="text"
               name="dia"
               class="form-control"
               value="{{ $horario->dia }}">
    </div>

    <div class="mb-3">
        <label>Hora Inicio</label>

        <input type="time"
               name="hora_inicio"
               class="form-control"
               value="{{ $horario->hora_inicio }}">
    </div>

    <div class="mb-3">
        <label>Hora Fin</label>

        <input type="time"
               name="hora_fin"
               class="form-control"
               value="{{ $horario->hora_fin }}">
    </div>

    <div class="mb-3">
        <label>ID Entrenador</label>

        <input type="number"
               name="id_entrenador"
               class="form-control"
               value="{{ $horario->id_entrenador }}">
    </div>

    <button type="submit"
            class="btn btn-primary">

        Actualizar

    </button>

</form>

</div>

</body>
</html>