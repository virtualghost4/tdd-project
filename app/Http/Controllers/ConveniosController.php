<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use DB;
use App\Convenio;
use App\Area;
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

    return view('convenios.createconvenios')->with('areas',$areas);
   

    }
        

    public function store(Request $request){
        
      
    /*  
        $input =Input::all();
*/
    
        $convenio = new Convenio();
        $convenio->nombre_convenio=$request->input('nombre_convenio');
        $convenio->tipo_convenio=$request->input('tipo_convenio');
        $convenio->id_area=Input::get('id_area');
        $convenio->fecha_de_inicio=$request->input('fecha_de_inicio');
        $convenio->fecha_termino=$request->input('fecha_termino');
        $convenio->estado=$request->input('estado');
        $convenio->fecha_firma=$request->input('fecha_firma');
        $convenio->fecha_decreto=$request->input('fecha_decreto');
        $convenio->nombre_coordinador=$request->input('nombre_coordinador');
        $convenio->objetivo=$request->input('objetivo');
        $convenio->m_colaboracion=$request->input('m_colaboracion');
        $convenio->nombre_institucion=$request->input('nombre_institucion');
        $convenio->actividades=$request->input('actividades');

    

     flash('Convenio ingresado correctamente','success');


    //  Session::flash('mensaje', 'Horario cargado con éxito');


        $convenio->save();
        
        
        return redirect('convenios');
        }


public function edit($id_convenio){
            
    $areas =  Area::pluck('nombre_area','id_area');


    $convenio = Convenio::find($id_convenio);


        return view('convenios.editconvenios')->with('convenio',$convenio)->with('areas',$areas);

    }
    public function update(Request $request, $id_convenio){
            
        $convenio = Convenio::find($id_convenio);

        $convenio->nombre_convenio=$request->input('nombre_convenio');
        $convenio->tipo_convenio=$request->input('tipo_convenio');
        $convenio->id_area=Input::get('id_area');
        $convenio->fecha_de_inicio=$request->input('fecha_de_inicio');
        $convenio->fecha_termino=$request->input('fecha_termino');
        $convenio->estado=$request->input('estado');
        $convenio->fecha_firma=$request->input('fecha_firma');
        $convenio->fecha_decreto=$request->input('fecha_decreto');
        $convenio->nombre_coordinador=$request->input('nombre_coordinador');
        $convenio->objetivo=$request->input('objetivo');
        $convenio->m_colaboracion=$request->input('m_colaboracion');
        $convenio->nombre_institucion=$request->input('nombre_institucion');
        $convenio->actividades=$request->input('actividades');

    

        $convenio->save();

        return redirect('convenios');

    }

    public function destroy($id_convenio){
        
        $convenio = Convenio::where('id_convenio','=',$id_convenio);
        $convenio->delete();
        return redirect('convenios');
    }
}

