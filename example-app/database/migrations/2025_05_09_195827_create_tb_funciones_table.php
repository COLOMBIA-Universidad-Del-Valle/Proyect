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
        Schema::create('tb_funciones', function (Blueprint $table) {
            $table->integer('id_funciones', true);
            $table->integer('id_usuario')->unique('id_usuario');
            $table->enum('permisos', ['administrador', 'desarrolador', 'usuario', 'espectador']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_funciones');
    }
};
