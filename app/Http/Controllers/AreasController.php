<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Area;
class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::all();
        return view('areas.index')->with('areas',$areas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $areas = new Area();
        $areas->id_area=$request->Input('id_area');
        $areas->nombre_area=$request->Input('nombre_area');
        $areas->save();
        return redirect('areas');
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
public function edit($id_area)
    {
       $area = Area::find($id_area);
       return view('areas.edit')->with('area',$area);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_area)
    {
        $areas = Area::find($id_area);
        $areas->id_area=$request->Input('id_area');
        $areas->nombre_area=$request->Input('nombre_area');
        $areas->save();
        return redirect('areas');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_area)
    {
        $areas = Area::find($id_area)->delete();
        return redirect('areas');
    }
}
