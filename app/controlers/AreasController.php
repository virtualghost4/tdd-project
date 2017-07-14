<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Area;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::all();
        return view('areas.index')->with('areas',$areas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instituciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instituciones = new Institucion();
        $instituciones->id_institucion=$request->Input('id_institucion');
        $instituciones->nombre_institucion=$request->Input('nombre_institucion');
        $instituciones->pais=$request->Input('pais');
        $instituciones->vigente=$request->Input('vigente');
        $instituciones->id_internacional=$request->Input('id_internacional');
        $instituciones->rut_institucion=$request->Input('rut_institucion');
        $instituciones->razon_social=$request->Input('razon_social');
        $instituciones->direccion=$request->Input('direccion');
        $instituciones->telefono=$request->Input('telefono');
        $instituciones->email=$request->Input('email');
        $instituciones->link_institucion=$request->Input('link_institucion');
        $instituciones->save();
        return redirect('instituciones');
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
