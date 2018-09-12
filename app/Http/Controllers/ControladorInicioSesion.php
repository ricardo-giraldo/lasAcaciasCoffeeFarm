<?php

namespace lasAcaciasCoffeeFarm\Http\Controllers;

use Illuminate\Http\Request;
use lasAcaciasCoffeeFarm\User;

class ControladorInicioSesion extends Controller
{
    	public function store(Request $request){

		//Listamos todos los usuarios
		$listadoUsuarios = User::all();

		//se recorre el listado de usuarios
		foreach ($listadoUsuarios as $usuario) {

			//se verifica que el usuario ingresado tenga un email y una contraseña correctos
			if ($usuario->email == $request->email && $usuario->password == $request->password) {

				//Si el usuario es un administrador se direcciona a la pantalla de administracion
				if ($usuario->tipo_usuario=='Administrador') {
					
					return view('inicioAdministracion');
					//return Redirect::to('welcome');

				//Si el usuario es un vendedor, se direcciona a la pantalla de ventas
				}elseif ($usuario->tipo_usuario=='Vendedor') {
					
					return view('inicioVentas');
					//return Redirect::to('/');

				}

			}	

		}

		//Si el usuario no es correcto, se direcciona a la misma página de inicio de sesión
		return view('welcome');
		//return Redirect::to('/');
		Session::flash('message-error','Usuario incorrecto');

	}
}
