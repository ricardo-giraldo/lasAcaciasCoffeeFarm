<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedors', function (Blueprint $table) {
            $table->increments('idVendedor');
            $table->string('nombre_usuario');
            $table->string('contrasenia');
            $table->integer('granja_idGranja')-> unsigned(); 
            $table->foreing('granja_idGranja')-> reference('idGranja')-> on('Granja');
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
        Schema::dropIfExists('vendedors');
    }
}
