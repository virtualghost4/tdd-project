@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-4">
            <a href="estados/create" class="btn btn-primary">Añadir Nueva estado<a/>
        </div>
        <table class="table table-bordered table-resposive">
            <thead>
                <tr>
                    <th>id_estado</th>
                    <th>nombre_estado</th>
                    <th>accion</th>
                </tr>
            </thead>

            <tbody>

            @foreach($estados as $estado)
                
                <tr>

                    <td>{{ $estado-> id_estado }}</td>
                    <td>{{ $estado-> nombre_estado }}</td>
     
                    <td>

                        {{ Form::open(array('url' => 'estado' . $estado->id_estado, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}

                            {{ Form::hidden('_method', 'EDIT') }}
                            {{ Form::submit('Editar', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}

                        <!--<a href="estado/edit" class="btn btn-success">Editar</a>-->
                        <!--<a href="estado/destroy" class="btn btn-danger" >Eliminar</a> -->   
                    </td>  
                </tr>
            @endforeach


            </tbody>
        </table>
        </div>
    </div>
    </div>



 @endsection