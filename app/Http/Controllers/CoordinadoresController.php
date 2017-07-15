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
        $coordinador = new Coordinador();
        $coordinador->id_coordinador=$request->input('id_coordinador');
        $coordinador->id_institucion=$request->input('id_institucion');
        $coordinador->rut_coordinador=$request->input('rut_coordinador');
        $coordinador->nombre_coordinador=$request->input('nombre_coordinador');
        $coordinador->fecha_de_inicio=$request->input('fecha_de_inicio');
        $coordinador->fecha_termino=$request->input('fecha_termino');
        $coordinador->vigencia=$request->input('vigencia');
        $coordinador->descripcion=$request->input('descripcion');
        $coordinador->unidad_academica=$request->input('unidad_academica');
        $coordinador->email=$request->input('email');

    

        //flash('Convenio ingresado correctamente','success');


        //  Session::flash('mensaje', 'Horario cargado con éxito');


        $coordinador->save();
        
        
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

    public function edit($id_coordinador)
    {
        $instituciones = Institucion::pluck('nombre_institucion','id_institucion');
        $coordinador = Coordinador::find($id_coordinador);
        return view('coordinadores.edit')->with('coordinador',$coordinador)->with('instituciones',$instituciones);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_coordinador)
    {
        $coordinador = Coordinador::find($id_coordinador);
        $coordinador->id_coordinador=$request->input('id_coordinador');
        $coordinador->id_institucion=$request->input('id_institucion');
        $coordinador->rut_coordinador=$request->input('rut_coordinador');
        $coordinador->nombre_coordinador=$request->input('nombre_coordinador');
        $coordinador->fecha_de_inicio=$request->input('fecha_de_inicio');
        $coordinador->fecha_termino=$request->input('fecha_termino');
        $coordinador->vigencia=$request->input('vigencia');
        $coordinador->descripcion=$request->input('descripcion');
        $coordinador->unidad_academica=$request->input('unidad_academica');
        $coordinador->email=$request->input('email');
        $coordinador->save();
        return redirect('coordinadores');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_coordinador)
    {
        $coordinador = Coordinador::find($id_coordinador)->delete();
        return redirect('coordinadores');
    }
}
