<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDonadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->string('email', 150)->nullable();
            $table->string('telefono', 150)->nullable();
            $table->date('fecha_donacion')->nullable();
            $table->text('observaciones')->nullable();
            $table->string('status', 10)->default('registrado')->comment('registrado, dono');

     

            $table->unsignedBigInteger('obra_id')->nullable();

            $table->foreign('obra_id')->references('id')->on('obras');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE donadores ADD FULLTEXT search_donadores(nombre)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donadores');
    }
}
