<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_tours', function (Blueprint $table) {
            $table->increments('idVentaTour');
            $table->integer('cantidad');
            $table->integer('precio');            
            $table->integer('tour_idTour')->unsigned();
            $table->foreing('tour_idTour')->reference('idTour')->on('Tour');
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
        Schema::dropIfExists('venta_tours');
    }
}
