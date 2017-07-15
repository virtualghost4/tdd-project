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
                        <a href="{{route('estados.edit', $estado->id_estado)}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('estados.destroy', $estado->id_estado) }}" class="btn btn-danger" >Eliminar</a>    
                    </td>

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