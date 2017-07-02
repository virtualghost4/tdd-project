@extends('layouts.app')

@section('content')

<br>
<div class="row">
  <div class="col-xs-6 col-md-4">
    <a href="#" class="btn btn-primary">Añadir un Área<a/>
    </div>
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

                <td>{{ $area->nombre}}</td>

   

               
                <td>
                <a href="" class="btn btn-success">Editar</a>
                <a href="" class="btn btn-danger" >Eliminar</a>    
                </td>  
            </tr>
        @endforeach


        </tbody>
    </table>

 @endsection