<?php

namespace lasAcaciasCoffeeFarm\Http\Controllers;

use Illuminate\Http\Request;
use lasAcaciasCoffeeFarm\producto;
use lasAcaciasCoffeeFarm\hospedaje;
use lasAcaciasCoffeeFarm\tiquete;
use Illuminate\Support\Facades\DB;
use lasAcaciasCoffeeFarm\publicacion;
use lasAcaciasCoffeeFarm\comentario;

class ControladorProductos extends Controller
{
    /**
    *Método para registrar o crear productos, se recibe como parámetro la petición enviada por *POST desde la vista y se crea el producto con los atributos
    */
    public function store(Request $request){
    	
    	$producto = new producto();
    	$producto->nombre = $request->input('nombre');
    	$producto->precio = $request->input('precio');
    	$producto->cantidad = '0';
    	$producto->id_granja = '1';
    	$producto->id_tipo_producto = $request->input('tipo_producto');

    	$producto->save();

    	$listadoProductos = producto::all();
    	$listadoHospedajes = hospedaje::all();
    	$listadoTiquetes = tiquete::all();
		$listadoPublicaciones = publicacion::all();
        $listadoComentarios = comentario::all();
        return view('inicioAdministracion', compact('listadoProductos', 'listadoHospedajes', 'listadoTiquetes', 'listadoPublicaciones', 'listadoComentarios'));
    	
	}

	public function editarProducto($producto){

		$producto = producto::find($producto);
		return view('editarProducto', compact('producto'));

	}

	public function eliminarProducto($producto){

			
		$producto = producto::find($producto);
		$producto->delete();
		
		$listadoProductos = producto::all();
        $listadoHospedajes = hospedaje::all();
        $listadoTiquetes = tiquete::all();
        $listadoPublicaciones = publicacion::all();
        $listadoComentarios = comentario::all();
        return view('inicioAdministracion', compact('listadoProductos', 'listadoHospedajes', 'listadoTiquetes', 'listadoPublicaciones', 'listadoComentarios'));

	}

	public function actualizarProducto(Request $request, $id){

		$producto = producto::find($id);
		$producto -> fill($request->all());
		$producto -> save();

		$listadoProductos = producto::all();
        $listadoHospedajes = hospedaje::all();
        $listadoTiquetes = tiquete::all();
        $listadoPublicaciones = publicacion::all();
        $listadoComentarios = comentario::all();
        return view('inicioAdministracion', compact('listadoProductos', 'listadoHospedajes', 'listadoTiquetes', 'listadoPublicaciones', 'listadoComentarios'));
	}
}
