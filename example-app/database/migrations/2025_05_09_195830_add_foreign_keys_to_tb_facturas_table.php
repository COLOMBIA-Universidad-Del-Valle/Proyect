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
        Schema::table('tb_facturas', function (Blueprint $table) {
            $table->foreign(['id_cliente'], 'tb_facturas_ibfk_1')->references(['id_cliente'])->on('tb_clientes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['id_factura'], 'tb_facturas_ibfk_2')->references(['id_factura'])->on('tb_usuarios')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_facturas', function (Blueprint $table) {
            $table->dropForeign('tb_facturas_ibfk_1');
            $table->dropForeign('tb_facturas_ibfk_2');
        });
    }
};
