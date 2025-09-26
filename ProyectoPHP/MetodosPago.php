<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetodosPago extends Model
{
    protected $table = 'metodos_pago';
    protected $primaryKey = 'id_metod_pago';
    public $timestamps = false;

    protected $fillable = [
        'formas_pago',
    ];

    // Relación con pagos
    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_metodo_pago', 'id_metod_pago');
    }
}
