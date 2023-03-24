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
        Schema::create('lib_asignar_categoria', function (Blueprint $table) {
            $table->unsignedInteger('cod_libro');
            $table->foreign('cod_libro')->references('cod_libro')->on('lib_libro')->onDelete('cascade');

            $table->unsignedInteger('cod_categoria');
            $table->foreign('cod_categoria')->references('cod_categoria')->on('lib_categoria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lib_asignar_categoria');
    }
};
