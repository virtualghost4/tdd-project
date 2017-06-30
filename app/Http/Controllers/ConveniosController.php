<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConveniosController extends Controller
{
  public function index(){

		$convenios= Convenios::all();
		return view('convenios.index')->with('convenios',$convenios);


    }

    public function create(){
        return view('convenios.create');

    }
        
    public function store(Request $request){
        
        $convenio = Impresora::create($request->all());
        $convenio->save();
        flash('Convenio ingresado exitosamente','success');
        return redirect('convenios');
        }
/*
    public function index(){

		$equipos = Impresora::all();
		return view('impresoras.index')->with('equipos',$equipos);


    }

    public function create(){
        return view('impresoras.create');

    }
        
    public function store(Request $request){
        
        $impresora = Impresora::create($request->all());
        $impresora->save();
        flash('Impresora ingresada correctamente','success');
        return redirect('equipos');
        }

    public function edit($numero_de_serie){
            

        $impresora=Impresora::find($numero_de_serie);

        return view('impresoras.edit')->with('impresora',$impresora);

    }
    public function update(Request $request, $numero_de_serie){
            
        $impresora = Impresora::find($numero_de_serie);

        $impresora->fill($request->all());

        $impresora->save();

        return redirect('equipos');

    }
    public function destroy($numero_de_serie){
        
        if(Arriendo::where('numero_de_serie',$numero_de_serie)->count()>0){
            $cliente = Arriendo::where('numero_de_serie',$numero_de_serie)->select('rut')->get(1);
            foreach($cliente as $ct){
                $cte=$ct->rut;
                break;
            }
            flash('Impresora vinculado a el cliente rut '.$cte.', desvincule el equipos del cliente para poder eliminarlo','danger');
            return redirect('equipos');

        }else{
            $equipo = Impresora::find($numero_de_serie);
            $equipo->delete();
            return redirect('equipos');
        }
                    


    }



    public function equiposSinCliente($rut){

    	$equipos = DB::table('impresoras')->whereNotIn('numero_de_serie',
    	function($query){
    		$query->select('numero_de_serie')->from('arriendos')->whereRaw('impresoras.numero_de_serie = arriendos.numero_de_serie');
    	})->get();

        $nombre = Cliente::find($rut);

    	return view('impresoras.sinvincular')->with('equipos',$equipos)->with('rut',$rut)->with('nombre',$nombre);



    }*/
}

