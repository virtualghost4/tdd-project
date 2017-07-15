@extends('layouts.app')

@section('content')

 

 {{ Form::open(['route'=>['coordinadores.update',$coordinador->id_coordinador],'method' => 'PUT','class'=>'form-horizontal']) }}
 
  <div class="form-group">
 	{!! Form::label ('id_institucion', 'Institucion', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::select('id_institucion', $instituciones,null, array('class' => 'form-control')) !!}
 	</div>
 </div>
 <div class="form-group">
 	{!! Form::label ('rut_coordinador', 'RUT', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('rut_coordinador', $coordinador->rut_coordinador, ['class'=>'form-control']) !!}
 	</div>
 </div>
 <div class="form-group">
 	{!! Form::label ('nombre_coordinador', 'Nombre Coordinador', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('nombre_coordinador', $coordinador->nombre_coordinador, ['class'=>'form-control']) !!}
 	</div>
 </div>
 <div class="form-group">
 	{!! Form::label ('fecha_de_inicio', 'ID fecha_de_inicio', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('fecha_de_inicio', $coordinador->fecha_de_inicio, ['class'=>'form-control']) !!}
 	</div>
 </div>
 <div class="form-group">
 	{!! Form::label ('fecha_termino', 'ID fecha_termino', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('fecha_termino', $coordinador->fecha_termino, ['class'=>'form-control']) !!}
 	</div>
 </div>
 <div class="form-group">
 	{!! Form::label ('vigencia', 'vigencia', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('vigencia', $coordinador->vigencia, ['class'=>'form-control']) !!}
 	</div>
 </div>
 <div class="form-group">
 	{!! Form::label ('descripcion', 'descripcion', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('descripcion', $coordinador->descripcion, ['class'=>'form-control']) !!}
 	</div>
 </div>

 <div class="form-group">
 	{!! Form::label ('unidad_academica', 'unidad_academica', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('unidad_academica', $coordinador->unidad_academica, ['class'=>'form-control']) !!}
 	</div>
 </div>
 <div class="form-group">
 	{!! Form::label ('email', 'email', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('email', $coordinador->email, ['class'=>'form-control']) !!}
 	</div>
 </div>
  
 <div class="form-group">
 	<div class="col-md-offset-2 col-md-10">
 		 	{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
 	</div>

 </div>
 
 {!! Form::close() !!}
 @endsection 