@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-4">
            <a href="tiposconvenios/create" class="btn btn-primary">Añadir Nueva tipo_convenio<a/>
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

                        {{ Form::open(array('url' =>'tiposconvenios'.$tipo_convenio->id_tipo_convenio,'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}

                            {{ Form::hidden('_method', 'EDIT') }}
                            {{ Form::submit('Editar', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}

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