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
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->integer('id_usuario', true);
            $table->string('nombre', 299);
            $table->string('correo', 299);
            $table->string('telefono', 13);
            $table->string('contrasena', 399);
            $table->string('tipo_usuario', 299);
            $table->integer('id_funciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_usuarios');
    }
};
