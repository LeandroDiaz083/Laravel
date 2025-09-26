<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'id_categoria';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    // Relación con servicios
    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'id_categoria', 'id_categoria');
    }
}
