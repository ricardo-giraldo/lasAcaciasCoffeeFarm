<?php

namespace lasAcaciasCoffeeFarm\Http\Controllers;

use lasAcaciasCoffeeFarm\hospedaje;
use lasAcaciasCoffeeFarm\granja;
use lasAcaciasCoffeeFarm\producto;
use lasAcaciasCoffeeFarm\tiquete;
use lasAcaciasCoffeeFarm\publicacion;
use lasAcaciasCoffeeFarm\comentario;
use Illuminate\Http\Request;

class ControladorComentarios extends Controller
{

	public function store(Request $request){
    	
    	$comentario = new comentario();
    	$comentario->nombre_turista = $request->input('nombre_turista');
    	$comentario->texto = $request->input('texto');

    	$comentario->save();

		$listadoPublicaciones = publicacion::all();
    	return view('inicioTuristas', compact('listadoPublicaciones'));
    	
	}

    public function eliminarComentario($comentario){

			
		$comentario = comentario::find($comentario);
		$comentario->delete();
		
		$listadoProductos = producto::all();
        $listadoHospedajes = hospedaje::all();
        $listadoTiquetes = tiquete::all();
        $listadoPublicaciones = publicacion::all();
        $listadoComentarios = comentario::all();
        return view('inicioAdministracion', compact('listadoProductos', 'listadoHospedajes', 'listadoTiquetes', 'listadoPublicaciones', 'listadoComentarios'));

	}
}
