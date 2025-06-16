<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->id('id_usuario'); 
            $table->string('nombre', 255);
            $table->string('correo', 255);
            $table->string('telefono', 20);
            $table->string('contrasena', 255);
            $table->string('tipo_usuario', 255);
            $table->unsignedBigInteger('id_funciones');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_usuarios');
    }
};
