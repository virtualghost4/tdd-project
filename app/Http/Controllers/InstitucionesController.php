<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Institucion;
use App\Area;

class InstitucionesController extends Controller
{
    public function index(){
		$institucio = Institucion::all();
		return view('instituciones.index')->with('institucio',$institucio);
    }

    public function create(){

        // return view('Institucion.create');

    }
        

    public function store(Request $request){
        
        $Institucion = Institucion::create($request->all());
        $Institucion->save();
        flash('Institucion ingresada exitosamente','success');
        return redirect('instituciones');
        }
}
