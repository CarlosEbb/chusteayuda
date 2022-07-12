<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipo_reporte')->onDelete('cascade')->onUpdate('cascade');
            
            $table->string('nombre_paciente')->nullable();
            $table->string('sexo_paciente')->nullable();
            $table->string('fecha_nacimiento')->nullable();
            $table->string('nombre_representante')->nullable();
            $table->string('telefono_representante')->nullable();
            
            $table->string('correo')->nullable();
            $table->string('direccion')->nullable();
            $table->boolean('notificado')->default(false);

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
        Schema::dropIfExists('reportes');
    }
}
