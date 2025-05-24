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
        Schema::create('tb_clientes', function (Blueprint $table) {
            $table->integer('id_cliente', true);
            $table->string('nombre', 299);
            $table->string('apellido', 299);
            $table->string('telefono', 299);
            $table->string('nit', 299);
            $table->string('direccion', 299);
            $table->string('observaciones', 299);
            $table->string('correo', 299);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_clientes');
    }
};
