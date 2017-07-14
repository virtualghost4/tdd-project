<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ActividadConvenio;
use App\Convenio;
use App\Coordinador;

class ActividadesConveniosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividad = ActividadConvenio::all();
        return view('actividadesconvenios.index')->with('actividad',$actividad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $convenios = Convenio::pluck('nombre_convenio','id_convenio');
        $coordinadores = Coordinador::pluck('nombre_coordinador','id_coordinador');
        return view('actividadesconvenios.create')->with('convenios',$convenios)->with('coordinadores',$coordinadores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividad = new ActividadConvenio();
        $actividad->id_convenio=$request->input('id_convenio');
        $actividad->id_coordinador=$request->input('id_coordinador');
        $actividad->id_actividad=$request->input('id_actividad');
        $actividad->fecha_inicio=$request->input('fecha_inicio');
        $actividad->fecha_fin=$request->input('fecha_fin');
        $actividad->estado=$request->input('estado');
        $actividad->nombre_actividad=$request->input('nombre_actividad');
        $actividad->descripcion=$request->input('descripcion');
        $actividad->vigente=$request->input('vigente');

    

        //flash('Convenio ingresado correctamente','success');


        //  Session::flash('mensaje', 'Horario cargado con éxito');


        $actividad->save();
        
        
        return redirect('actividadesconvenios');
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
