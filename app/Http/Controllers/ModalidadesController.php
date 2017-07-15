<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Modalidad;

class ModalidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modalidades = Modalidad::all();
        return view('modalidades.index')->with('modalidades',$modalidades);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modalidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modalidad = new Modalidad();
        $modalidad->id_modalidad=$request->Input('id_modalidad');
        $modalidad->nombre_modalidad=$request->Input('nombre_modalidad');
        $modalidad->save();
        return redirect('modalidades');
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

    public function edit($id_modalidad)
    {
       $modalidad = Modalidad::find($id_modalidad);
       return view('modalidades.edit')->with('modalidad',$modalidad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_modalidad)
    {
        $modalidad = Modalidad::find($id_modalidad);
        $modalidad->id_modalidad=$request->Input('id_modalidad');
        $modalidad->nombre_modalidad=$request->Input('nombre_modalidad');
        $modalidad->save();
        return redirect('modalidades');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_modalidad)
    {
        $modalidades = Institucion::find($id_modalidad)->delete();
        return redirect('modalidades');
    }
}
