<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Estado;

class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::all();
        return view('estados.index')->with('estados',$estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estados = new Estado();
        $estados->id_estado=$request->Input('id_estado');
        $estados->nombre_estado=$request->Input('nombre_estado');
        $estados->save();
        return redirect('estados');
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

    public function edit($id_estado)
    {
       $estado = Estado::find($id_estado);
       return view('estados.edit')->with('estado',$estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_estado)
    {
        $estados = Estado::find($id_estado);
        $estados->id_estado=$request->Input('id_estado');
        $estados->nombre_estado=$request->Input('nombre_estado');
        $estados->save();
        return redirect('estados');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_estado)
    {
        $estados = Estado::find($id_estado)->delete();
        return redirect('estados');
    }
}
