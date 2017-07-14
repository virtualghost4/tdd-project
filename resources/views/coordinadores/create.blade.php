@extends('layouts.app')

@section ('content')
 <div class="container" style="border-radius: 4ex">
 <br>
 <h2>Ingresar Coordinador</h2>

 {!! Form::open(['url'=>'coordinadores','class'=>'form-horizontal']) !!}

     <div class="form-group">
    {!! Form::label ('id_institucion','Institucion: ',['class'=>'control-label col-md-2'])!!}
    
    <div class="col-md-10">
        {!! Form::select('id_institucion',$instituciones, null, ['class'=>'form-control']) !!}
    </div>
 </div>
 
 <div class="form-group">
    {!! Form::label ('rut_coordinador', 'RUT: ', ['class'=>'control-label col-md-2']) !!}
    <div class="col-md-10">
        {!! Form::text('rut_coordinador', null, ['class'=>'form-control']) !!}
    </div>
 </div>

  <div class="form-group">
    {!! Form::label ('nombre_coordinador', 'Nombre:', ['class'=>'control-label col-md-2']) !!}
    <div class="col-md-10">
        {!! Form::text('nombre_coordinador', null, ['class'=>'form-control']) !!}
      </div>
  </div>
  <div class="form-group">
    {!! Form::label ('fecha_de_inicio', 'Fecha Inicio: ', ['class'=>'control-label col-md-2']) !!}
    <div class="col-md-10">
            {!! Form::text('fecha_de_inicio', null, ['class'=>'form-control']) !!}
    </div>
  </div>
  <div class="form-group">
  {!! Form::label ('fecha_termino', 'Fecha Termino: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('fecha_termino', null, ['class'=>'form-control']) !!}
  </div>
 </div>
 <div class="form-group">
  {!! Form::label ('vigencia', 'Vigencia: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::checkbox('vigencia', null, ['class'=>'form-control']) !!}
  </div>
 </div>
 <div class="form-group">
  {!! Form::label ('descripcion', 'Descripcion: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('descripcion', null, ['class'=>'form-control']) !!}
  </div>
 </div>
<div class="form-group">
  {!! Form::label ('unidad_academica', 'Unidad Academica: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('unidad_academica', null, ['class'=>'form-control']) !!}
  </div>
 </div>
 <div class="form-group">
  {!! Form::label ('email', 'E-mail: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
  </div>
 </div>

 <div class="form-group">
    <div class="col-md-offset-2 col-md-10">
            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
    </div>

 </div>
 
 </div>


 {{ Form::close() }}
    <script type="text/javascript">
      $(function(){
        $("#rut").rut();
      });
    </script>
 @endsection 