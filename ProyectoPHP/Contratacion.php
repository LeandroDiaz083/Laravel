<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contratacion extends Model
{
    protected $table = 'contratacion';
    protected $primaryKey = 'id_contratacion';
    public $timestamps = false;

    protected $fillable = [
        'id_cliente',
        'id_prestador',
        'id_servicio',
        'fecha_solicitud',
        'fecha_programada',
        'estado_contratacion',
        'observacion',
    ];

    public function cliente()
    {
        return $this->belongsTo(Usuario::class, 'id_cliente', 'id_usuario');
    }

    public function prestador()
    {
        return $this->belongsTo(Usuario::class, 'id_prestador', 'id_usuario');
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'id_servicio', 'id_servicio');
    }
}