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
        Schema::table('tb_detalle_factura', function (Blueprint $table) {
            $table->foreign(['id_producto'], 'tb_detalle_factura_ibfk_1')->references(['id_producto'])->on('tb_productos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['id_factura'], 'tb_detalle_factura_ibfk_2')->references(['id_factura'])->on('tb_facturas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_detalle_factura', function (Blueprint $table) {
            $table->dropForeign('tb_detalle_factura_ibfk_1');
            $table->dropForeign('tb_detalle_factura_ibfk_2');
        });
    }
};
