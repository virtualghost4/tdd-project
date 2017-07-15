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
                        <a href="{{route('modalidades.edit', $modalidad->id_modalidad)}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('modalidades.destroy', $modalidad->id_modalidad) }}" class="btn btn-danger" >Eliminar</a>    
                    </td>

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