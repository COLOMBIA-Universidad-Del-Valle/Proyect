<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_items', function (Blueprint $table) {
            $table->id('id_item');
            $table->unsignedBigInteger('cotizacion_id');
            $table->string('descripcion', 255);
            $table->integer('cantidad');
            $table->decimal('precio', 10, 2);

            // Clave foránea a la cotización
            $table->foreign('cotizacion_id')
                ->references('id_cotizacion')
                ->on('tb_cotizaciones')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_items');
    }
};
