<?php

namespace lasAcaciasCoffeeFarm\Http\Controllers;

use Illuminate\Http\Request;
use lasAcaciasCoffeeFarm\User;
use lasAcaciasCoffeeFarm\producto;
use lasAcaciasCoffeeFarm\hospedaje;
use lasAcaciasCoffeeFarm\tiquete;
use lasAcaciasCoffeeFarm\publicacion;
use lasAcaciasCoffeeFarm\comentario;

class ControladorInicioSesion extends Controller
{
    	public function store(Request $request){

		//Listamos todos los usuarios
		$listadoUsuarios = User::all();

		//se recorre el listado de usuarios
		foreach ($listadoUsuarios as $usuario) {

			//se verifica que el usuario ingresado tenga un email y una contraseña correctos
			if ($usuario->email == $request->email && $usuario->password == $request->password) {

				$listadoProductos = producto::all();
				$listadoHospedajes = hospedaje::all();
				$listadoTiquetes = tiquete::all();
				$listadoPublicaciones = publicacion::all();
				$listadoComentarios = comentario::all();

				//Si el usuario es un administrador se direcciona a la pantalla de administracion
				if ($usuario->tipo_usuario=='Administrador') {
					
					
					return view('inicioAdministracion', compact('listadoProductos', 'listadoHospedajes', 'listadoTiquetes', 'listadoPublicaciones', 'listadoComentarios'));
					//return Redirect::to('inicioAdministracion');

				//Si el usuario es un vendedor, se direcciona a la pantalla de ventas
				}elseif ($usuario->tipo_usuario=='Vendedor') {
					
					return view('inicioVentas');
					//return Redirect::to('inicioVentas');

				}

			}	

		}

		//Si el usuario no es correcto, se direcciona a la misma página de inicio de sesión
		return view('inicioSesion');
		//return Redirect::to('/');
		Session::flash('message-error','Usuario incorrecto');

	}
}

