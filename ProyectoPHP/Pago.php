<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pago';
    protected $primaryKey = 'id_pago';
    public $timestamps = false;

    protected $fillable = [
        'id_metodo_pago',
        'monto',
        'fecha_pago',
        'id_contratacion',
    ];

    // Relación con contratación
    public function contratacion()
    {
        return $this->belongsTo(Contratacion::class, 'id_contratacion', 'id_contratacion');
    }

    // Relación con métodos de pago
    public function metodoPago()
    {
        return $this->belongsTo(MetodosPago::class, 'id_metodo_pago', 'id_metod_pago');
    }
}
