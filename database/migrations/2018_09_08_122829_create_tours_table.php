<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('idTour');
            $table->integer('precio');
            $table->integer('granja_idGranja')-> unsigned(); 
            $table->foreing('granja_idGranja')-> reference('idGranja')-> on('Granja');
            $table->integer('tipoTour')-> unsigned(); 
            $table->foreing('tipoTour')-> reference('idTour')-> on('TipoTour');


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
        Schema::dropIfExists('tours');
    }
}
