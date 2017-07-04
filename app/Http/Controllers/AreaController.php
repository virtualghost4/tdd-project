<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Area;
use App\Institucion;

class AreaController extends Controller
{
     public function index(){


		$area = Area::all();
		return view('area.index')->with('area',$area);


    }

    public function create(){

        // return view('convenios.create');

    }
        

    public function store(Request $request){
        
        $area = Area::create($request->all());
        $area->save();
        flash('Area ingresada exitosamente','success');
        return redirect('area');
        }
}
