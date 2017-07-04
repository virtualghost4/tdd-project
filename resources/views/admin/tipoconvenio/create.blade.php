@extends('admin.template.main')

@section('title', 'Crear Usuario')


@section('contenido')

{!! Form::open(['route'=> 'admin.tipoconvenio.store', 'method'=>'POST']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre Institución') !!}
        {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Nombre Institución','required'])!!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    </div>
{!! Form::close() !!}

@endsection