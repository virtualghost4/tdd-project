@extends('layouts.app')

@section('content')

<br>
<div class="row">
  <div class="col-md-4 col-md-offset-2">
    <a href="convenios/create" class="btn btn-primary">Añadir un nuevo Convenio<a/>
    </div>
</div>
 
      <div class="container-fluid">
        <div class="row">
     <div class="container col-md-8 col-md-offset-4">


  <table class="table table-bordered table-resposive">
        <thead>
            <tr>
     
                <th>NOMBRE CONVENIO</th>
                <th>TIPO CONVENIO</th>
                <th>AREA</th>
                <th>MODALIDAD</th>
                <th>INSTITUCION</th>
                <th>PAIS</th>
                <th>FECHA FIRMA</th>
                <th>FECHA TERMINO</th>
                <th>DCTO DIGITAL</th>
                <th>LINK</th>

                <th>Accion</th>

            </tr>
        </thead>

        <tbody>

        @foreach($convenios as $convenio)
            
            <tr>
                <td>{{ $convenio->nombre_convenio }}</td>

                <td>{{ $convenio->tipo_convenio}}</td>

                <td>{{ $convenio->id_area}}</td>

                <td>{{ $convenio->m_colaboracion}}</td>

                <td>{{ $convenio->nombre_institucion}}</td>
                <td>{{ $convenio->pais}}</td>
                <td>{{ $convenio->fecha_de_inicio }}</td>
                <td>{{ $convenio->fecha_termino}}</td>
                <td></td>
                <td></td>
 
                <td>

                <a href="{{url('convenios/edit', $convenio->id_convenio)}}" class="btn btn-success">Editar</a>
                <a href="{{route('deleteConv', $convenio->id_convenio) }}" class="btn btn-danger" >Eliminar</a>    
                </td>  
            </tr>
        @endforeach


        </tbody>
    </table>
    </div>
    </div>
    </div>



 @endsection