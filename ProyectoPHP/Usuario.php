<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    public $timestamps = true;

    protected $fillable = [
        'id_rol',
        'nombre',
        'apellido',
        'email',
        'contrasena',
        'telefono',
        'direccion',
    ];

    protected $hidden = [
        'contrasena',
        'remember_token',
    ];

    /**
     * Laravel espera el campo "password",
     * así que lo mapeamos a "contrasena".
     */
    public function getAuthPassword()
    {
        return $this->contrasena;
    }

    // Relación con Rol
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol', 'id_rol');
    }
}
