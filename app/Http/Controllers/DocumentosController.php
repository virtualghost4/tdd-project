<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Documento;
use App\Convenio;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documento= Documento::all();
        return view('documentos.index')->with('documentos',$documento);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$convenios = Convenio::pluck('nombre_convenio','id_convenio');
        return view('documentos.create')->with('convenios',$convenios);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $documentos = new Documento();
        $documentos->id_documento=$request->Input('id_documento');
		$documentos->id_convenio=$request->Input('id_convenio');
		$documentos->fecha_firma=$request->Input('fecha_firma');
		$documentos->fecha_decreto=$request->Input('fecha_decreto');
		$documentos->nro_decreto=$request->Input('nro_decreto');
        $documentos->save();
        return redirect('documentos');
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
    public function edit($id_documento)
    {
       $documentos = Documento::find($id_documento);
       return view('documentos.edit')->with('documentos',$documentos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_documento)
    {
        $documentos =Documento::find($id_documento);
        $documentos->id_documento=$request->Input('id_documento');
        $documentos->id_convenios=$request->Input('id_convenios');
        $documentos->fecha_firma=$request->Input('fecha_firma');
        $documentos->fecha_decreto=$request->Input('fecha_decreto');
        $documentos->nro_decreto=$request->Input('nro_decreto');
        $documentos->save();
        return redirect('documentos');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_documento)
    {
        $documentos = Documento::find($id_documento)->delete();
        return redirect('documentos');
    }
}