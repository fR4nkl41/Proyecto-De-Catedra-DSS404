<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'INSCRIPCIONES';
    protected $primaryKey = 'id_inscripcion';
    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'id_plan',
        'fecha_inicio',
        'estado'
    ];
}
