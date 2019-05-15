<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nombre');
            $table->enum('tipo',['planta', 'ocasional'])->default('planta');
            $table->unsignedBigInteger('institucion_id'); // laravel 5.8
            /* versiones ante.
              $table->integer('institucion_id')->unsigned();
            */
            $table->timestamps();

            $table->foreign('institucion_id')->references('id')->on('institucion')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docente');
    }
}
