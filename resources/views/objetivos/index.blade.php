@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-4">
            <a href="objetivos/create" class="btn btn-primary">Añadir Nueva objetivo<a/>
        </div>
        <table class="table table-bordered table-resposive">
            <thead>
                <tr>
                    <th>id_objetivo</th>
                    <th>nombre_objetivo</th>
                    <th>accion</th>
                </tr>
            </thead>

            <tbody>

            @foreach($objetivos as $objetivo)
                
                <tr>

                    <td>{{ $objetivo-> id_objetivo }}</td>
                    <td>{{ $objetivo-> nombre_objetivo }}</td>
     
                    <td>

                        {{ Form::open(array('url' => 'objetivos' . $objetivo->id_objetivo, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}

                            {{ Form::hidden('_method', 'EDIT') }}
                            {{ Form::submit('Editar', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}

                        <!--<a href="objetivos/edit" class="btn btn-success">Editar</a>-->
                        <!--<a href="objetivos/destroy" class="btn btn-danger" >Eliminar</a> -->   
                    </td>  
                </tr>
            @endforeach


            </tbody>
        </table>
        </div>
    </div>
    </div>



 @endsection