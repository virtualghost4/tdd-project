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
                <th>ID INSTITUCION</th>
                <th>NOMBRE</th>
                <th>TIPO</th>
                <th>PAIS</th>
             

                <th>Accion</th>

            </tr>
        </thead>

        <tbody>

        @foreach($institucion as $institucion)
            
            <tr>
                <td>{{ $institucion->id_institucion}}</td>
                <td>{{ $institucion->nombre}}</td>
                <td>{{ $institucion->tipo}}</td>
                <td>{{ $institucion->pais}}</td>

   

               
                <td>
                <a href="" class="btn btn-success">Editar</a>
                <a href="" class="btn btn-danger" >Eliminar</a>    
                </td>  
            </tr>
        @endforeach


        </tbody>
    </table>

 @endsection