<?php

namespace lasAcaciasCoffeeFarm\Http\Controllers;

use Illuminate\Http\Request;
use lasAcaciasCoffeeFarm\hospedaje;
use lasAcaciasCoffeeFarm\granja;
use lasAcaciasCoffeeFarm\producto;
use lasAcaciasCoffeeFarm\tiquete;

use lasAcaciasCoffeeFarm\Http\Controllers\Controller;

class ControladorHospedaje extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $listaHospedaje=Hospedaje::all();
        return view('inicioAdministracion',compact('listaHospedaje'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('inicioAdministracion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hospedaje = new hospedaje();
        $hospedaje->nombre = $request->input('nombre');
        $hospedaje->id_granja = '1';
        $hospedaje->save();

        $listadoProductos = producto::all();
        $listadoHospedajes = hospedaje::all();
        $listadoTiquetes = tiquete::all();
        return view('inicioAdministracion', compact('listadoProductos', 'listadoHospedajes', 'listadoTiquetes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($hospedaje)
    {
        //
        $hospedaje= hospedaje::find($hospedaje);
        return  view('inicioAdministracion',compact('listaHospedaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editarHospedaje($hospedaje)
    {
        //
        $hospedaje= hospedaje::find($hospedaje);
        return view('editarHospedaje',compact('hospedaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualiarHospedaje(Request $request, $id)
    {
        $hospedaje = hospedaje::find($id);
        $hospedaje -> fill($request->all());
        $hospedaje -> save();

        $listadoProductos = producto::all();
        $listadoHospedajes = hospedaje::all();
        $listadoTiquetes = tiquete::all();
        return view('inicioAdministracion', compact('listadoProductos', 'listadoHospedajes', 'listadoTiquetes'));
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminarHospedaje($hospedaje)
    {
        $hospedaje=hospedaje::find($hospedaje);
        $hospedaje->delete();

        $listadoProductos = producto::all();
        $listadoHospedajes = hospedaje::all();
        $listadoTiquetes = tiquete::all();
        return view('inicioAdministracion', compact('listadoProductos', 'listadoHospedajes', 'listadoTiquetes'));

     }
}
