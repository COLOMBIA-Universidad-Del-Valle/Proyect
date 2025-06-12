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
        Schema::table('tb_cotizaciones', function (Blueprint $table) {
            $table->foreign(['usuario'], 'tb_cotizaciones_ibfk_1')->references(['id_usuario'])->on('tb_usuarios')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_cotizaciones', function (Blueprint $table) {
            $table->dropForeign('tb_cotizaciones_ibfk_1');
        });
    }
};
