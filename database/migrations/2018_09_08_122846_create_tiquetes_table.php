<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiquetes', function (Blueprint $table) {
            $table->increments('idTiquete');
            $table->integer('numero');
            $table->integer('precio');
            $table->integer('hospedaje_idHospedaje')-> unsigned(); 
            $table->foreing('hospedaje_idHospedaje')-> reference('idHospedaje')-> on('Hospedaje');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.s
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiquetes');
    }
}
