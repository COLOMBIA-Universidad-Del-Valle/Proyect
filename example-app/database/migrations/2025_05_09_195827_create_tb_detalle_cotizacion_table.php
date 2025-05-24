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
        Schema::create('tb_detalle_cotizacion', function (Blueprint $table) {
            $table->integer('id_detalle_cotizacion', true);
            $table->integer('id_cotizacion')->unique('id_cotizacion');
            $table->integer('id_producto')->unique('id_producto');
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_detalle_cotizacion');
    }
};
