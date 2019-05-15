<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nombre');
            $table->timestamps();
        });

        Schema::create('materia_docente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('materia_id');
            $table->unsignedBigInteger('docente_id');
            $table->timestamps();
            $table->foreign('materia_id')->references('id')->on('materia');
            $table->foreign('docente_id')->references('id')->on('docente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materia');
        Schema::dropIfExists('materia_docente');
    }
}
