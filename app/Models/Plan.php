<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'PLANES';

    protected $primaryKey = 'id_plan';

    public $timestamps = false;

    protected $fillable = [
        'nombre_plan',
        'descripcion',
        'precio'
    ];
}