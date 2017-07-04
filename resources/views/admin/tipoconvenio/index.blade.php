@extends('admin.template.main')

@section('title', 'lista de Convenios');

@section('contenido')
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
                    <td><a href="" class="btn btn-danger"> </a>  <a href="" class="btn btn-warning"></a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection