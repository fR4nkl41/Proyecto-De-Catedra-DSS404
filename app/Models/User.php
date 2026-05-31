<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Mapeo exacto de tu tabla e ID en SQLite
    protected $table = 'USUARIOS';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;

    // Campos que se pueden llenar desde los formularios
    protected $fillable = [
        'nombre',
        'correo',
        'contrasena',
    ];

    /**
     * Le indica a Laravel que tu columna de contraseña se llama "contrasena" y no "password"
     */
    public function getAuthPassword()
    {
        return $this->contrasena;
    }
}
