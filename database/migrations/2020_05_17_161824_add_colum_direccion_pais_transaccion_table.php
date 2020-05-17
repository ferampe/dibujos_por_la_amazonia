<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumDireccionPaisTransaccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donadores', function (Blueprint $table) {
            $table->string('direccion')->nullable();
            $table->string('pais')->nullable();
            $table->string('transaccion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('donadores', function (Blueprint $table) {
            $table->dropColumn('direccion');
            $table->dropColumn('pais');
            $table->dropColumn('transaccion');
        });
    }
}
