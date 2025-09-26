<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id_usuario', true);
            $table->integer('id_rol');
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->string('email', 30)->unique();
            $table->string('contrasena', 255);
            $table->string('telefono', 10);
            $table->string('direccion', 50);
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->nullable();

            $table->foreign('id_rol')->references('id_rol')->on('rol');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
