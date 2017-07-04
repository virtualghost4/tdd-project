@extends('admin.template.main')

@section('title', 'lista de Convenios');

@section('contenido')
    <a href="{{route('admin.tipoconvenio.create')}}" class="btn btn-primary"> Ingresar Nuevo tipo Convenio</a>
    <table class="table table-striped">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Accion</th>
        </thead>
        <tbody>
            @foreach($tipoconvenios as $tipoconvenio)
                <tr>
                    <td>{{$tipoconvenio->id}}</td>
                    <td>{{$tipoconvenio->name}}</td>
                    <td><a href="" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> </a>  <a href="{{route('admin.tipoconvenio.destroy',$tipoconvenio->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection