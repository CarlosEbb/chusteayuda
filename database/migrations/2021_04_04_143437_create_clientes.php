<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->longText('direccion')->nullable();
            $table->longText('numero_contacto')->nullable();
            $table->longText('logo')->nullable();
            $table->longText('foto_encabezado')->nullable();

            $table->longText('color_encabezado')->nullable();
            $table->longText('color_texto_encabezado')->nullable();
            $table->boolean('check_encabezado')->default(false);
            $table->boolean('check_logo')->default(false);
            $table->boolean('check_name')->default(false);
            
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
        Schema::dropIfExists('clientes');
    }
}
