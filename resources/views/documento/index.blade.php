@extends('layouts.app')

@section('content')

<br>
<div class="row">
  <div class="col-xs-6 col-md-4">
    <a href="#" class="btn btn-primary">Añadir un nuevo Documento<a/>
    </div>
</div>
 
     
  <table class="table table-bordered table-resposive">
        <thead>
            <tr>
                <th>ID DOCUMENTO</th>
                <th>ID CONVENIO</th>
                <th>FECHA FIRMA</th>
                <th>FECHA DECRETO</th>
                <th>NUMERO DECRETO</th>
            </tr>
        </thead>

        <tbody>

        @foreach($documentos as $documento)
            
            <tr>
                <td>{{ $documento->id_documento }}</td>

                <td>{{ $documento->id_convenios}}</td>

                <td>{{ $documento->fecha_firma}}</td>

                <td>{{ $documento->fecha_decreto}}</td>
                <td>{{ $documento->nro_decreto}}</td>
                <td>
                <a href="" class="btn btn-success">Editar</a>
                <a href="" class="btn btn-danger" >Eliminar</a>    
                </td>  
            </tr>
        @endforeach


        </tbody>
    </table>

 @endsection