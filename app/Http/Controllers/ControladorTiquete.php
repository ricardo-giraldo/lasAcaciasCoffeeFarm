<?php

namespace lasAcaciasCoffeeFarm\Http\Controllers;

use Illuminate\Http\Request;
use lasAcaciasCoffeeFarm\hospedaje;
use lasAcaciasCoffeeFarm\tiquete;
use lasAcaciasCoffeeFarm\producto;
use lasAcaciasCoffeeFarm\Http\Controllers\Controller;

class ControladorTiquete extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicioTiquete');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tiquete = new tiquete();
        $tiquete->numero = $request->input('numero');
        $tiquete->precio = $request->input('precio');
        $tiquete->id_hospedaje = $request->input('hospedaje');

        $tiquete->save();

        $listadoTiquetes = tiquete::all();
        $listadoProductos = producto::all();
        $listadoHospedajes = hospedaje::all();
       return view('inicioAdministracion', compact('listadoTiquetes','listadoHospedajes','listadoHospedajes','listadoProductos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editarTiquete($tiquete){

        $tiquete = tiquete::find($tiquete);
        return view('editarTiquete', compact('tiquete'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function actualizarTiquete(Request $request, $id){

        $tiquete = tiquete::find($id);
        $tiquete -> fill($request->all());
        $tiquete -> save();

        $listadoTiquetes = tiquete::all();
        $listadoProductos = producto::all();
        $listadoHospedajes = hospedaje::all();
        
     return view('inicioAdministracion', compact('listadoTiquetes','listadoHospedajes','listadoHospedajes','listadoProductos'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminarTiquete($tiquete){

            
        $tiquete = tiquete::find($tiquete);
        $tiquete->delete();

        $listadoTiquetes = tiquete::all();
        $listadoProductos = producto::all();
        $listadoHospedajes = hospedaje::all();
        
     return view('inicioAdministracion', compact('listadoTiquetes','listadoHospedajes','listadoHospedajes','listadoProductos'));

    }
}
