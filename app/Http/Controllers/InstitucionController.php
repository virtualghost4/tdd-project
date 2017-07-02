<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InstitucionController extends Controller
{
    public function index(){


		$instituciones = Institucion::all();
		return view('institucion.index')->with('instituciones',$instituciones);


    }

    public function create(){

        // return view('Institucion.create');

    }
        

    public function store(Request $request){
        
        $Institucion = Institucion::create($request->all());
        $Institucion->save();
        flash('Institucion ingresada exitosamente','success');
        return redirect('Institucion');
        }
}
