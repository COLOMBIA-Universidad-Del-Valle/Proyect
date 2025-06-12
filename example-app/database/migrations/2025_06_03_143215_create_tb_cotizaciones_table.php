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
        Schema::create('tb_cotizaciones', function (Blueprint $table) {
            $table->integer('usuario')->index('usuario');
            $table->integer('id_cotizacion')->primary();
            $table->integer('cliente');
            $table->date('fecha_cotizacion');
            $table->enum('estado', ['Pendiente', 'Aceptada', 'Rechazada', '']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_cotizaciones');
    }
};
