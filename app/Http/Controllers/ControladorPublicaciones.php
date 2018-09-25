<?php

namespace lasAcaciasCoffeeFarm\Http\Controllers;

use Illuminate\Http\Request;
use lasAcaciasCoffeeFarm\producto;
use lasAcaciasCoffeeFarm\hospedaje;
use lasAcaciasCoffeeFarm\tiquete;
use lasAcaciasCoffeeFarm\publicacion;
use lasAcaciasCoffeeFarm\comentario;

class ControladorPublicaciones extends Controller
{
     public function store(Request $request){
    	
    	$publicacion = new publicacion();
    	$publicacion->titulo = $request->input('titulo');
    	$publicacion->resumen = $request->input('resumen');
    	$publicacion->texto = $request->input('texto');

    	$publicacion->save();

    	$listadoProductos = producto::all();
    	$listadoHospedajes = hospedaje::all();
    	$listadoTiquetes = tiquete::all();
    	$listadoPublicaciones = publicacion::all();
		$listadoComentarios = comentario::all();
        return view('inicioAdministracion', compact('listadoProductos', 'listadoHospedajes', 'listadoTiquetes', 'listadoPublicaciones', 'listadoComentarios'));
    	
	}

	public function editarPublicacion($publicacion){

		$publicacion = publicacion::find($publicacion);
		return view('editarPublicacion', compact('publicacion'));

	}

	public function eliminarPublicacion($publicacion){

			
		$publicacion = publicacion::find($publicacion);
		$publicacion->delete();
		
		$listadoProductos = producto::all();
        $listadoHospedajes = hospedaje::all();
        $listadoTiquetes = tiquete::all();
        $listadoPublicaciones = publicacion::all();
        $listadoComentarios = comentario::all();
        return view('inicioAdministracion', compact('listadoProductos', 'listadoHospedajes', 'listadoTiquetes', 'listadoPublicaciones', 'listadoComentarios'));

	}

	public function actualizarPublicacion(Request $request, $id){

		$publicacion = publicacion::find($id);
		$publicacion -> fill($request->all());
		$publicacion -> save();

		$listadoProductos = producto::all();
        $listadoHospedajes = hospedaje::all();
        $listadoTiquetes = tiquete::all();
        $listadoPublicaciones = publicacion::all();
        $listadoComentarios = comentario::all();
        return view('inicioAdministracion', compact('listadoProductos', 'listadoHospedajes', 'listadoTiquetes', 'listadoPublicaciones', 'listadoComentarios'));
	}
}
