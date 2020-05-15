<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 200);
            $table->string('artista', 150);
            $table->string('imagen')->nullable();
            $table->string('ano', 20)->nullable();
            $table->text('tecnica')->nullable();
            $table->text('en_tecnica')->nullable();
            $table->string('dimensiones', 100)->nullable();
            $table->integer('numero')->unique();
            $table->string('status',10)->default('diponible')->comment('disponible, asignado, oculto');


            $table->timestamps();
        });

        DB::statement('ALTER TABLE obras ADD FULLTEXT search_obras(artista, titulo)');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obras');
    }
}
