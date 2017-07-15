<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Objetivo;
use App\Institucion;
class ObjetivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objetivos = Objetivo::all();
        return view('objetivos.index')->with('objetivos',$objetivos);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instituciones = Institucion::pluck('nombre_institucion','id_institucion');;
        return view('objetivos.create')->with('instituciones',$instituciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $objetivos = new Objetivo();
        $objetivos->id_objetivo=$request->Input('id_objetivo');
        $objetivos->nombre_objetivo=$request->Input('nombre_objetivo');
        $objetivos->save();
        return redirect('objetivos');
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
    public function edit($id_objetivo)
    {
       $objetivos = Institucion::find($id_objetivo);
       return view('objetivos.edit')->with('objetivos',$objetivos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_institucion)
    {
        
        $objetivos = new Objetivo();
        $objetivos->id_objetivo=$request->Input('id_objetivo');
        $objetivos->nombre_objetivo=$request->Input('nombre_objetivo');
        $objetivos->save();
        return redirect('objetivos');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_objetivo)
    {
        $objetivos = Objetivo::find($id_objetivo)->delete();
        return redirect('objetivos');
    }
}
