@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-4">
            <a href="instituciones/create" class="btn btn-primary">Añadir Nueva Institucion<a/>
        </div>
        <table class="table table-bordered table-resposive">
            <thead>
                <tr>
                    <th>id_institucion</th>
                    <th>nombre_institucion</th>
                    <th>pais</th>
                    <th>vigente</th>
                    <th>id_internacional</th>
                    <th>rut_institucion</th>
                    <th>razon_social</th>
                    <th>direccion</th>
                    <th>telefono</th>
                    <th>email</th>
                    <th>link_institucion</th>
                    <th>accion</th>
                </tr>
            </thead>

            <tbody>

            @foreach($instituciones as $institucion)
                
                <tr>

                    <td>{{ $institucion-> id_institucion }}</td>
                    <td>{{ $institucion-> nombre_institucion }}</td>
                    <td>{{ $institucion-> pais }}</td>
                    <td>{{ $institucion-> vigente }}</td>
                    <td>{{ $institucion-> id_internacional }}</td>
                    <td>{{ $institucion-> rut_institucion }}</td>
                    <td>{{ $institucion-> razon_social }}</td>
                    <td>{{ $institucion-> direccion }}</td>
                    <td>{{ $institucion-> telefono }}</td>
                    <td>{{ $institucion-> email }}</td>
                    <td>{{ $institucion-> link_institucion }}</td>
     
                    <td>
                        <a href="{{route('instituciones.edit', $institucion->id_institucion)}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('instituciones.destroy', $institucion->id_institucion) }}" class="btn btn-danger" >Eliminar</a>    
                    </td>

                        <!--<a href="instituciones/edit" class="btn btn-success">Editar</a>-->
                        <!--<a href="instituciones/destroy" class="btn btn-danger" >Eliminar</a> -->   
                    
                </tr>
            @endforeach


            </tbody>
        </table>
        </div>
    </div>
    </div>



 @endsection