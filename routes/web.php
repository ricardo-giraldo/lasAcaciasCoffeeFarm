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
//______________________________________________________________________
//rutas de controllador Producto

Route::resource('inicioTiquete','ControladorTiquete');

Route::resource('inicioAdministracion','ControladorProductos');
Route::resource('inicioAdministracion','ControladorAdministracion');

Route::resource('/productos/registrar','ControladorProductos');

Route::get('/productos/editar/{id}','ControladorProductos@editarProducto');

Route::get('/productos/eliminar/{id}','ControladorProductos@eliminarProducto');

Route::get('/productos/actualizar/{id}','ControladorProductos@actualizarProducto');
//______________________________________________________________________
//rutas de controllador Hospedaje
Route::resource('/hospedajes/registrar','controladorHospedaje');

Route::get('/hospedajes/editar/{id}','controladorHospedaje@editarHospedaje');

Route::get('/hospedajes/eliminar/{id}','controladorHospedaje@eliminarHospedaje');

Route::get('/hospedajes/actualizar/{id}','controladorHospedaje@actualiarHospedaje');

//__________________________________________________________________________________
//Rutas del controlador tiquete

Route::resource('/tiquetes/registrar','ControladorTiquete');

Route::get('/tiquetes/editar/{id}','ControladorTiquete@editarTiquete');

Route::get('/tiquetes/eliminar/{id}','ControladorTiquete@eliminarTiquete');

Route::get('/tiquetes/actualizar/{id}','ControladorTiquete@actualizarTiquete');

//__________________________________________________________________________________
//Rutas del controlador publicacion

Route::resource('/publicaciones/registrar','ControladorPublicaciones');

Route::get('/publicaciones/editar/{id}','ControladorPublicaciones@editarPublicacion');

Route::get('/publicaciones/eliminar/{id}','ControladorPublicaciones@eliminarPublicacion');

Route::get('/publicaciones/actualizar/{id}','ControladorPublicaciones@actualizarPublicacion');

//__________________________________________________________________________________
//Rutas del controlador comentario

Route::resource('/comentarios/registrar','ControladorComentarios');

Route::get('/comentarios/eliminar/{id}','ControladorComentarios@eliminarComentario');


//__________________________________________________________________________________
//Rutas del controlador comentario
Route::get('/turistas','ControladorTuristas@cargarPagina');
