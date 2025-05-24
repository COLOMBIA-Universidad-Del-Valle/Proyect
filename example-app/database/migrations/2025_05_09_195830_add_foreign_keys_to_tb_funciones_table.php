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
        Schema::table('tb_funciones', function (Blueprint $table) {
            $table->foreign(['id_funciones'], 'tb_funciones_ibfk_1')->references(['id_funciones'])->on('tb_usuarios')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_usuario'], 'tb_funciones_ibfk_2')->references(['id_usuario'])->on('tb_usuarios')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_funciones', function (Blueprint $table) {
            $table->dropForeign('tb_funciones_ibfk_1');
            $table->dropForeign('tb_funciones_ibfk_2');
        });
    }
};
