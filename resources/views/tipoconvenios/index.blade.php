@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-4">
            <a href="tipoconvenios/create" class="btn btn-primary">Añadir Nueva tipo_convenio<a/>
        </div>
        <table class="table table-bordered table-resposive">
            <thead>
                <tr>
                    <th>id_tipo_convenio</th>
                    <th>nombre_tipo_convenio</th>
                    <th>accion</th>
                </tr>
            </thead>

            <tbody>

            @foreach($tiposConvenios as $tipo_convenio)
                
                <tr>

                    <td>{{ $tipo_convenio-> id_tipo_convenio }}</td>
                    <td>{{ $tipo_convenio-> nombre_tipo_convenio }}</td>
     
                    <td>
                        <a href="{{route('tipoconvenios.edit', $tipo_convenio->id_tipo_convenio)}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('tipoconvenios.destroy', $tipo_convenio->id_tipo_convenio) }}" class="btn btn-danger" >Eliminar</a>    
                    </td>
                        <!--<a href="tipo_convenio/edit" class="btn btn-success">Editar</a>-->
                        <!--<a href="tipo_convenio/destroy" class="btn btn-danger" >Eliminar</a> -->   
                    </td>  
                </tr>
            @endforeach


            </tbody>
        </table>
        </div>
    </div>
    </div>



 @endsection