<?php

use Illuminate\Http\Request;
use lasAcaciasCoffeeFarm\User;
use app\Producto;
use app\Hospedaje;
use app\Tiquetes;
use app\tipo_tour;
use app\granja;
use Illuminate\Support\Facades\DB;

class ControladorAdministracion extends Controller
{



public function generarHospedajes(){

	$HospedajeReservado = array();

		$consultaLosHospedajes = DB::('Hospedaje')
		-> join('granja', 'granja.idGranja', '=' , 'Hospedaje.idHospedaje')
		-> pg_select('Hospedaje.nombre', 'granja.nombre as nombreGranja')
		-> get();





}
}
