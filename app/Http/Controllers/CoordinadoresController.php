<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Coordinador;
use App\Institucion;
class CoordinadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coordinadores = Coordinador::all();
        return view('coordinadores.index')->with('coordinadores',$coordinadores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instituciones = Institucion::pluck('nombre_institucion','id_institucion');
        return view('coordinadores.create')->with('instituciones',$instituciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividad = new Coordinador();
        $actividad->id_coordinador=$request->input('id_coordinador');
        $actividad->id_institucion=$request->input('id_institucion');
        $actividad->rut_coordinador=$request->input('rut_coordinador');
        $actividad->nombre_coordinador=$request->input('nombre_coordinador');
        $actividad->fecha_de_inicio=$request->input('fecha_de_inicio');
        $actividad->fecha_termino=$request->input('fecha_termino');
        $actividad->vigencia=$request->input('vigencia');
        $actividad->descripcion=$request->input('descripcion');
        $actividad->unidad_academica=$request->input('unidad_academica');
        $actividad->email=$request->input('email');

    

        //flash('Convenio ingresado correctamente','success');


        //  Session::flash('mensaje', 'Horario cargado con éxito');


        $actividad->save();
        
        
        return redirect('coordinadores');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
