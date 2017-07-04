<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Area;

class AreaController extends Controller
{
     public function index(){


		$areas = Area::all();
		return view('area.index')->with('areas',$areas);


    }

    public function create(){

         return view('area.create');

    }
        

    public function store(Request $request){
        
        $area = Area::create($request->all());
        $area->save();
        flash('Area ingresada exitosamente','success');
        return redirect('area');
        }




    public function edit($id_area){
            

        $area=Area::find($id_area);

        return view('area.edit')->with('area',$area);

    }
    public function update(Request $request, $id_area){
            
        $area = Area::find($id_area);

        $area->fill($request->all());

        $area->save();

        return redirect('area');

    }
    public function destroy($id_area){
        
              
        $area = Area::where('id_area','=',$id_area);
        $area->delete();
        return redirect('area');
         


    }

}
