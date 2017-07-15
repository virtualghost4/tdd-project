<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use DB;
use App\Convenio;
use App\Area;
use App\Coordinador;
use App\TipoConvenio;
use App\Estado;
use App\Modalidad;
use App\Objetivo;
use App\ActividadConvenio;
use App\Institucion;

use View;
use Illuminate\Support\Facades\Input;

class ConveniosController extends Controller
{



  public function index(){
	   $convenios = Convenio::all();
	   return view('convenios.index')->with('convenios',$convenios);
    }

    public function create(){

    $areas =  Area::pluck('nombre_area','id_area');
    $tipo_convenio = TipoConvenio::pluck('nombre_tipo_convenio','id_tipo_convenio');

    $estados =  Estado::pluck('nombre_estado','id_estado');
	$coordinadores =  Coordinador::pluck('nombre_coordinador','id_coordinador');

    $instituciones =  Institucion::pluck('nombre_institucion','id_institucion');
    $objetivos =  Objetivo::pluck('nombre_objetivo','id_objetivo');
    $modalidades =  Modalidad::pluck('nombre_modalidad','id_modalidad');
        $actividades =  ActividadConvenio::pluck('nombre_actividad','id_actividad');

    return view('convenios.create')->with('areas',$areas)->with('tipo_convenio',$tipo_convenio)->with('estados',$estados)->with('coordinadores',$coordinadores)->with('instituciones',$instituciones)->with('objetivos',$objetivos)->with('modalidades',$modalidades)->with('actividades',$actividades);
   

    }
        

    public function store(Request $request){
        
      
    /*  
        $input =Input::all();
*/
    
        $convenio = new Convenio();
        $convenio->nombre_convenio=$request->input('nombre_convenio');
        $convenio->id_tipo_convenio=Input::get('id_tipo_convenio');
        $convenio->id_area=Input::get('id_area');
        $convenio->fecha_de_inicio=$request->input('fecha_de_inicio');
        $convenio->fecha_termino=$request->input('fecha_termino');
        $convenio->id_estado=Input::get('id_estado');
        $convenio->fecha_firma=$request->input('fecha_firma');
        $convenio->fecha_decreto=$request->input('fecha_decreto');
        $convenio->id_coordinador=Input::get('id_coordinador');
        $convenio->id_institucion=Input::get('id_institucion');
        $convenio->id_objetivo=Input::get('id_objetivo');
        $convenio->id_modalidad=Input::get('id_modalidad');
        $convenio->id_actividad=Input::get('id_actividad');
        $convenio->save();
        return redirect('convenios');
    }


    public function edit($id_convenio){
            

    $convenio = Convenio::find($id_convenio);
    $areas =  Area::pluck('nombre_area','id_area');
    $tipo_convenio = TipoConvenio::pluck('nombre_tipo_convenio','id_tipo_convenio');
    $estados =  Estado::pluck('nombre_estado','id_estado');
	$coordinadores =  Coordinador::pluck('nombre_coordinador','id_coordinador');
    $instituciones =  Institucion::pluck('nombre_institucion','id_institucion');
    $objetivos =  Objetivo::pluck('nombre_objetivo','id_objetivo');
    $modalidades =  Modalidad::pluck('nombre_modalidad','id_modalidad');
    $actividades =  ActividadConvenio::pluck('nombre_actividad','id_actividad');
    return view('convenios.edit')->with('convenio',$convenio)->with('areas',$areas)->with('tipo_convenio',$tipo_convenio)->with('estados',$estados)->with('coordinadores',$coordinadores)->with('instituciones',$instituciones)->with('objetivos',$objetivos)->with('modalidades',$modalidades)->with('actividades',$actividades);

    }
    public function update(Request $request, $id_convenio){
            
        $convenio = Convenio::find($id_convenio);

        $convenio->nombre_convenio=$request->input('nombre_convenio');
        $convenio->id_tipo_convenio=Input::get('id_tipo_convenio');
        $convenio->id_area=Input::get('id_area');
        $convenio->fecha_de_inicio=$request->input('fecha_de_inicio');
        $convenio->fecha_termino=$request->input('fecha_termino');
        $convenio->id_estado=Input::get('id_estado');
        $convenio->fecha_firma=$request->input('fecha_firma');
        $convenio->fecha_decreto=$request->input('fecha_decreto');
        $convenio->id_coordinador=Input::get('id_coordinador');
           $convenio->id_institucion=Input::get('id_institucion');
        $convenio->id_objetivo=Input::get('id_objetivo');
        $convenio->id_modalidad=Input::get('id_modalidad');
        $convenio->id_actividad=Input::get('id_actividad');


    

        $convenio->save();

        return redirect('convenios');

    }

    public function destroy($id_convenio){
        
        $convenio = Convenio::where('id_convenio','=',$id_convenio);
        $convenio->delete();
        return redirect('convenios');
    }
}

