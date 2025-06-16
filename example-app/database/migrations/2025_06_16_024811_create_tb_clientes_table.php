<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_clientes', function (Blueprint $table) {
    $table->increments('id_cliente');
    $table->unsignedBigInteger('usuario')->index(); // <-- Aquí
    $table->string('nombre', 255);
    $table->string('apellido', 255);
    $table->string('telefono', 20);
    $table->string('nit', 50);
    $table->string('direccion', 255);
    $table->string('observaciones', 500)->nullable();
    $table->string('correo', 255);
    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_clientes');
    }
};
