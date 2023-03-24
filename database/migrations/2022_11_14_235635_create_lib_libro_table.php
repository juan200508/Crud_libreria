<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lib_libro', function (Blueprint $table) {
            $table->increments('cod_libro');
            $table->string('titulo', 100);
            $table->string('descripcion', 100);
            $table->date('fecha_publicacion');

            $table->unsignedInteger('cod_idioma');
            $table->foreign('cod_idioma')->references('cod_idioma')->on('lib_idioma');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lib_libro');
    }
};
