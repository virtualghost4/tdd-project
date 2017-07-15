@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-4">
            <a href="areas/create" class="btn btn-primary">Añadir Nueva Area<a/>
        </div>
        <table class="table table-bordered table-resposive">
            <thead>
            <tr>
                <th>ID ÁREA</th>
                <th>NOMBRE</th>
                <th>Accion</th>

            </tr>
        </thead>

        <tbody>

        @foreach($areas as $area)
            
            <tr>
                <td>{{ $area->id_area}}</td>
                <td>{{ $area->nombre_area}}</td>

   

               
                
                    <td>
                        <a href="{{route('areas.edit', $area->id_area)}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('areas.destroy', $area->id_area) }}" class="btn btn-danger" >Eliminar</a>    
                    </td>
                <!--<a href="{{url('areas/edit',$area->id_area)}}" class="btn btn-success">Editar</a>
                <a href="{{url('areas/eliminar',$area->id_area)}}" class="btn btn-danger" >Eliminar</a>-->    
                </td>  
            </tr>
        @endforeach


        </tbody>
    </table>

 @endsection