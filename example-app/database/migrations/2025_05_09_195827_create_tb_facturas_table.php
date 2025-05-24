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
        Schema::create('tb_facturas', function (Blueprint $table) {
            $table->integer('id_factura', true);
            $table->integer('id_cliente')->unique('id_cliente');
            $table->integer('fecha_factura');
            $table->decimal('total', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_facturas');
    }
};
