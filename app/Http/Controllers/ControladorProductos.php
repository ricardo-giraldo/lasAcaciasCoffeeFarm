<?php

namespace lasAcaciasCoffeeFarm\Http\Controllers;

use Illuminate\Http\Request;
use lasAcaciasCoffeeFarm\producto;
use Illuminate\Support\Facades\DB;

class ControladorProductos extends Controller
{
    public function store(Request $request){
    	
    	$producto = new producto();
    	$producto->nombre = $request->input('nombre');
    	$producto->precio = $request->input('precio');
    	$producto->cantidad = '0';
    	$producto->id_granja = '1';
    	$producto->id_tipo_producto = $request->input('tipo_producto');

    	$producto->save();

    	$listadoProductos = producto::all();
		return view('inicioAdministracion', compact('listadoProductos'));
    	
	}

	public function editarProducto($producto){

		$producto = producto::find($producto);
		return view('editarProducto', compact('producto'));

	}

	public function eliminarProducto($producto){

			
		$producto = producto::find($producto);
		$producto->delete();

		$listadoProductos = producto::all();
		return view('inicioAdministracion', compact('listadoProductos'));

	}

	public function actualizarProducto(Request $request, $id){

		$producto = producto::find($id);
		$producto -> fill($request->all());
		$producto -> save();

		$listadoProductos = producto::all();
		return view('inicioAdministracion', compact('listadoProductos'));
	}
}
