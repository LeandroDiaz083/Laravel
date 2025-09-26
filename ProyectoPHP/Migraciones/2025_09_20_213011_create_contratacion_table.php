<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contratacion', function (Blueprint $table) {
            $table->integer('id_contratacion', true);
            $table->integer('id_cliente');
            $table->integer('id_prestador');
            $table->integer('id_servicio');
            $table->date('fecha_solicitud');
            $table->date('fecha_programada');
            $table->string('estado_contratacion', 20);
            $table->text('observacion')->nullable();

            $table->foreign('id_cliente')->references('id_usuario')->on('usuarios');
            $table->foreign('id_prestador')->references('id_usuario')->on('usuarios');
            $table->foreign('id_servicio')->references('id_servicio')->on('servicio');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contratacion');
    }
};
