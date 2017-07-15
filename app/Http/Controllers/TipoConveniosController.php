<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TipoConvenio;
class TipoConveniosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposConvenios = TipoConvenio::all();
        return view('tipoconvenios.index')->with('tiposConvenios',$tiposConvenios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoconvenios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tiposConvenios = new TipoConvenio();
        $tiposConvenios->id_tipo_convenio=$request->Input('id_tipo_convenio');
        $tiposConvenios->nombre_tipo_convenio=$request->Input('nombre_tipo_convenio');
        $tiposConvenios->save();
        return redirect('tipoconvenios');
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
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function edit($id_tipo_convenio)
    {
       $tipo_convenio = TipoConvenio::find($id_tipo_convenio);
       return view('tipoconvenios.edit')->with('tipo_convenio',$tipo_convenio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tipo_convenio)
    {
        $tiposConvenios = TipoConvenio::find($id_tipo_convenio);
        $tiposConvenios->id_tipo_convenio=$request->Input('id_tipo_convenio');
        $tiposConvenios->nombre_tipo_convenio=$request->Input('nombre_tipo_convenio');
        $tiposConvenios->save();
        return redirect('tipoconvenios');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_tipo_convenio)
    {
        $tiposConvenios = Institucion::find($id_tipo_convenio)->delete();
        return redirect('tipoconvenios');
    }
}
