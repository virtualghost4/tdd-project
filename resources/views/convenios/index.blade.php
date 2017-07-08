@extends('layouts.app')

@section('content')

<br>
<div class="row">
  <div class="col-xs-6 col-md-4">
    <a href="#" class="btn btn-primary">Añadir un nuevo Convenio<a/>
    </div>
</div>
 
     
  <table class="table table-bordered table-resposive">
        <thead>
            <tr>
                <th>ID CONVENIO</th>
                <th>NOMBRE</th>
                <th>ID AREA</th>
                <th>ID COORDINADOR</th>
                <th>ID TIPO DE CONVENIO</th>
                <th>FECHA DE INICIO</th>
                <th>FECHA DE TERMINO</th>
                <th>VIGENCIA</th>
                <th>OBJETIVO</th>
                <th>DESCRIPCION</th>

                <th>Accion</th>

            </tr>
        </thead>

        <tbody>

        @foreach($convenios as $convenio)
            
            <tr>
                <td>{{ $convenio->id_convenio }}</td>

                <td>{{ $convenio->nombre}}</td>

                <td>{{ $convenio->id_area}}</td>

                <td>{{ $convenio->id_coordinador}}</td>
                <td>{{ $convenio->id_t_convenio}}</td>
                <td>{{ $convenio->fecha_de_inicio }}</td>
                <td>{{ $convenio->fecha_termino}}</td>
                <td>{{ $convenio->vigencia}}</td> 
                <td>{{ $convenio->objetivo}} </td>
                <td>{{ $convenio->descripcion}} </td>
                <td>
                <a href="" class="btn btn-success">Editar</a>
                <a href="" class="btn btn-danger" >Eliminar</a>    
                </td>  
            </tr>
        @endforeach


        </tbody>
    </table>

 @endsection