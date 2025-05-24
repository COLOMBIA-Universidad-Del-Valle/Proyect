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
        Schema::table('tb_usuarios', function (Blueprint $table) {
            $table->foreign(['id_cotizacion'], 'tb_usuarios_ibfk_1')->references(['id_cotizacion'])->on('tb_cotizaciones')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_usuarios', function (Blueprint $table) {
            $table->dropForeign('tb_usuarios_ibfk_1');
        });
    }
};
