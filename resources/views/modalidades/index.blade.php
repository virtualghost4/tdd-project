@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-4">
            <a href="modalidades/create" class="btn btn-primary">Añadir Nueva modalidad<a/>
        </div>
        <table class="table table-bordered table-resposive">
            <thead>
                <tr>
                    <th>id_modalidad</th>
                    <th>nombre_modalidad</th>
                    <th>accion</th>
                </tr>
            </thead>

            <tbody>

            @foreach($modalidades as $modalidad)
                
                <tr>

                    <td>{{ $modalidad-> id_modalidad }}</td>
                    <td>{{ $modalidad-> nombre_modalidad }}</td>
     
                    <td>

                        {{ Form::open(array('url' => 'modalidades' . $modalidad->id_modalidad, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}

                            {{ Form::hidden('_method', 'EDIT') }}
                            {{ Form::submit('Editar', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}

                        <!--<a href="modalidades/edit" class="btn btn-success">Editar</a>-->
                        <!--<a href="modalidades/destroy" class="btn btn-danger" >Eliminar</a> -->   
                    </td>  
                </tr>
            @endforeach


            </tbody>
        </table>
        </div>
    </div>
    </div>



 @endsection