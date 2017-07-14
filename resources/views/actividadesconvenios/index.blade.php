@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-4">
            <a href="actividadesconvenios/create" class="btn btn-primary">Ingresar Actividad Convenio<a/>
        </div>
        <table class="table table-bordered table-resposive">
            <thead>
                <tr>
                    <th>ID convenio</th>
                    <th>ID coordinador</th>
                    <th>ID actividad</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Estado</th>
                    <th>Nombre Actividad</th>
                    <th>Descripcion</th>
                    <th>Vigente</th>
                    <th>Accion</th>
                </tr>
            </thead>

            <tbody>

            @foreach($actividad as $actividad)
                
                <tr>

                    <td>{{ $actividad-> id_convenio }}</td>
                    <td>{{ $actividad-> id_coordinador }}</td>
                    <td>{{ $actividad-> id_actividad }}</td>
                    <td>{{ $actividad-> fecha_inicio }}</td>
                    <td>{{ $actividad-> fecha_fin }}</td>
                    <td>{{ $actividad-> estado }}</td>
                    <td>{{ $actividad-> nombre_actividad }}</td>
                    <td>{{ $actividad-> descripcion }}</td>
                    <td>{{ $actividad-> vigente }}</td>
     
                    <td>

                        {{ Form::open(array('url' => 'instituciones' . $actividad->id_actividad, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}

                            {{ Form::hidden('_method', 'EDIT') }}
                            {{ Form::submit('Editar', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}

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