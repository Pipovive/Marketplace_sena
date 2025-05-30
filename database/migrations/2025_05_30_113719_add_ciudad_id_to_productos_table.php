<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
        {
            Schema::table('productos', function (Blueprint $table) {
                $table->unsignedBigInteger('ciudad_id')->nullable()->after('usuario_id');

                // Opcional: si existe una tabla ciudades con clave primaria id
                $table->foreign('ciudad_id')->references('id')->on('ciudades')->onDelete('set null');
            });
        }

        public function down()
        {
            Schema::table('productos', function (Blueprint $table) {
                $table->dropForeign(['ciudad_id']);
                $table->dropColumn('ciudad_id');
            });
        }
};
