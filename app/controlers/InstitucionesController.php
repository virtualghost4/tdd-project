<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Institucion;

class InstitucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instituciones = Institucion::all();
        return view('instituciones.index')->with('instituciones',$instituciones);
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
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function show($id_institucion)
    {
        $instituciones = Institucion::find($id_institucion);
        return view('instituciones.show')->with('instituciones',$instituciones);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function edit($id_institucion)
    {
       $instituciones = Institucion::find($id_institucion);
       return view::make('instituciones.edit')->with('instituciones',$instituciones);
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_institucion)
    {
        $instituciones = Institucion::find($id_institucion);
        $instituciones -> delete();

        Session::flash('message','Se borro!');
        return redirect('instituciones');
    }
}
