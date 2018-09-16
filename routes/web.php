<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicioSesion');
});

Route::resource('inicioSesion','ControladorInicioSesion');

Route::resource('inicioTiquete','ControladorTiquete');

Route::resource('inicioAdministracion','ControladorProductos');
Route::resource('inicioAdministracion','ControladorAdministracion');

Route::resource('/productos/registrar','ControladorProductos');

Route::get('/productos/editar/{id}','ControladorProductos@editarProducto');

Route::get('/productos/eliminar/{id}','ControladorProductos@eliminarProducto');

Route::get('/productos/actualizar/{id}','ControladorProductos@actualizarProducto');

Route::resource('/tiquetes/registrar','ControladorTiquete');

Route::get('/tiquetes/editar/{id}','ControladorTiquete@editarTiquete');

Route::get('/tiquetes/eliminar/{id}','ControladorTiquete@eliminarTiquete');

Route::get('/tiquetes/actualizar/{id}','ControladorTiquete@actualizarTiquete');
