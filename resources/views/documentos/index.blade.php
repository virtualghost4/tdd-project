@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-4">
            <a href="documentos/create" class="btn btn-primary">Añadir Nueva documento<a/>
        </div>
        <table class="table table-bordered table-resposive">
            <thead>
                <tr>
                    <th>id_documento</th>
                    <th>id_convenio</th>
                    <th>fecha_firma</th>
                    <th>fecha_decreto</th>
                    <th>nro_decreto</th>
                    <th>accion</th>
                </tr>
            </thead>

            <tbody>

            @foreach($documentos as $documento)
                
                <tr>

                    <td>{{ $documento-> id_documento }}</td>
                    <td>{{ $documento-> id_convenio }}</td>
                    <td>{{ $documento-> fecha_firma }}</td>
                    <td>{{ $documento-> fecha_decreto }}</td>
                    <td>{{ $documento-> nro_decreto }}</td>
     
                    <td>
                        <a href="{{route('documentos.edit', $documento->id_documento)}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('documentos.destroy', $documento->id_documento) }}" class="btn btn-danger" >Eliminar</a>    
                    </td>

                        <!--<a href="documentos/edit" class="btn btn-success">Editar</a>-->
                        <!--<a href="documentos/destroy" class="btn btn-danger" >Eliminar</a> -->   
                    </td>  
                </tr>
            @endforeach


            </tbody>
        </table>
        </div>
    </div>
    </div>



 @endsection