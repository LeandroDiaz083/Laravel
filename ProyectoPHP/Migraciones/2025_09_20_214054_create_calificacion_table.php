<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calificacion', function (Blueprint $table) {
            $table->integer('id_calificacion', true); // PK autoincrement
            $table->integer('puntuacion');
            $table->text('comentario');
            $table->date('fecha_calificacion');
            $table->integer('id_cliente');
            $table->integer('id_prestador');
            $table->integer('id_contratacion');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->nullable();

            // Claves foráneas
            $table->foreign('id_contratacion')->references('id_contratacion')->on('contratacion');
            $table->foreign('id_cliente')->references('id_usuario')->on('usuarios');
            $table->foreign('id_prestador')->references('id_usuario')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificacion');
    }
};
