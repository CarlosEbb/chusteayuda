<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageMateriales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_materiales', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('material_id')->unsigned();
            $table->foreign('material_id')->references('id')->on('materiales')->onDelete('cascade')->onUpdate('cascade');

            $table->string('ruta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_materiales');
    }
}
