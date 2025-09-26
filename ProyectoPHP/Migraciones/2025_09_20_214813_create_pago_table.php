<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pago', function (Blueprint $table) {
            $table->integer('id_pago', true);
            $table->integer('id_metodo_pago');
            $table->double('monto');
            $table->date('fecha_pago');
            $table->integer('id_contratacion');

            // Relaciones
            $table->foreign('id_contratacion')->references('id_contratacion')->on('contratacion');
            $table->foreign('id_metodo_pago')->references('id_metod_pago')->on('metodos_pago');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pago');
    }
};
