<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rector', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nombre');
            $table->unsignedBigInteger('institucion_id');// laravel 5.8
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
        Schema::dropIfExists('rector');
    }
}
