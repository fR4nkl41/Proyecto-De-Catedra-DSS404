<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    protected $table = 'ENTRENADORES';

    protected $primaryKey = 'id_entrenador';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'especialidad'
    ];
}