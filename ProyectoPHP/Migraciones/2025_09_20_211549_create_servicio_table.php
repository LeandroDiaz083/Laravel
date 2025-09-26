<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('servicio', function (Blueprint $table) {
            $table->integer('id_servicio', true);
            $table->string('nombre', 30);
            $table->double('precio');
            $table->text('descripcion');
            $table->integer('id_categoria');

            $table->foreign('id_categoria')->references('id_categoria')->on('categoria');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('servicio');
    }
};
