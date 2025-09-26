<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rol', function (Blueprint $table) {
            $table->integer('id_rol', true); // PK autoincrement
            $table->string('rol', 50);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rol');
    }
};
