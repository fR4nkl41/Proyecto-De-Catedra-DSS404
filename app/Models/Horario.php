<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'HORARIOS';
    protected $primaryKey = 'id_horario';
    public $timestamps = false;

    protected $fillable = [
        'actividad',
        'dia',
        'hora_inicio',
        'hora_fin',
        'id_entrenador'
    ];
}
