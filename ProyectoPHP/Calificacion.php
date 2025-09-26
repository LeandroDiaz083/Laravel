<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = 'calificacion';
    protected $primaryKey = 'id_calificacion';
    public $timestamps = true;

    protected $fillable = [
        'puntuacion',
        'comentario',
        'fecha_calificacion',
        'id_cliente',
        'id_prestador',
        'id_contratacion',
    ];

    // Relaciones
    public function cliente()
    {
        return $this->belongsTo(Usuario::class, 'id_cliente', 'id_usuario');
    }

    public function prestador()
    {
        return $this->belongsTo(Usuario::class, 'id_prestador', 'id_usuario');
    }

    public function contratacion()
    {
        return $this->belongsTo(Contratacion::class, 'id_contratacion', 'id_contratacion');
    }
}
