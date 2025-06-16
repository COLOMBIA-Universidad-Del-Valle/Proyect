<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_cotizaciones', function (Blueprint $table) {
            $table->id('id_cotizacion');
            $table->unsignedBigInteger('usuario')->index();
            $table->unsignedInteger('cliente')->index();
            $table->date('fecha_cotizacion');
            $table->enum('estado', ['Pendiente', 'Aceptada', 'Rechazada'])->default('Pendiente');

            // Foreign Keys
            $table->foreign('usuario')->references('id_usuario')->on('tb_usuarios')->onDelete('cascade');
            $table->foreign('cliente')->references('id_cliente')->on('tb_clientes')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_cotizaciones');
    }
};
