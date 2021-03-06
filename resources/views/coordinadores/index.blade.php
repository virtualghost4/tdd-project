@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-4">
            <a href="coordinadores/create" class="btn btn-primary">Ingresar Coordinador<a/>
        </div>
        <table class="table table-bordered table-resposive">
            <thead>
                <tr>
                    <th>ID coordinador</th>
                    <th>ID institucion</th>
                    <th>RUT</th>
                    <th>Nombre</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Vigencia</th>
                    <th>Descripcion</th>
                    <th>Unidad Academica</th>
                    <th>Email</th>
                    <th>Accion</th>
                </tr>
            </thead>

            <tbody>

            @foreach($coordinadores as $coordinador)
                
                <tr>

                    <td>{{ $coordinador-> id_coordinador }}</td>
                    <td>{{ $coordinador-> id_institucion }}</td>
                    <td>{{ $coordinador-> rut_coordinador }}</td>
                    <td>{{ $coordinador-> nombre_coordinador }}</td>
                    <td>{{ $coordinador-> fecha_inicio }}</td>
                    <td>{{ $coordinador-> fecha_termino }}</td>
                    <td>{{ $coordinador-> vigencia }}</td>
                    <td>{{ $coordinador-> descripcion }}</td>
                    <td>{{ $coordinador-> unidad_academica }}</td>
                    <td>{{ $coordinador-> email }}</td>
     
                    

                    <td>
                        <a href="{{route('coordinadores.edit', $coordinador->id_coordinador)}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('coordinadores.destroy', $coordinador->id_coordinador) }}" class="btn btn-danger" >Eliminar</a>    
                    </td>

                        <!--<a href="instituciones/edit" class="btn btn-success">Editar</a>-->
                        <!--<a href="instituciones/destroy" class="btn btn-danger" >Eliminar</a> -->   
                    </td>  
                </tr>
            @endforeach


            </tbody>
        </table>
        </div>
    </div>
    </div>



 @endsection