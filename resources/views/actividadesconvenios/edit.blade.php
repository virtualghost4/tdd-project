@extends('layouts.app')

@section('content')

 

 {{ Form::open(['route'=>['actividadesconvenios.update',$actividad->id_actividad],'method' => 'PUT','class'=>'form-horizontal']) }}
 
  <div class="form-group">

 	{!! Form::label ('id_coordinador', 'id coordinador', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('id_coordinador', $actividad->id_coordinador, ['class'=>'form-control']) !!}
 	
 	</div>

 </div>
   <div class="form-group">

 	{!! Form::label ('id_actividad', 'id actividad', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('id_actividad', $actividad->id_actividad, ['class'=>'form-control']) !!}
 	
 	</div>

 </div>
   <div class="form-group">

 	{!! Form::label ('fecha_fin', 'fecha fin', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('fecha_fin', $actividad->fecha_fin, ['class'=>'form-control']) !!}
 	
 	</div>

 </div>

 </div>
   <div class="form-group">

 	{!! Form::label ('estado', 'Estado', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('estado', $actividad->estado, ['class'=>'form-control']) !!}
 	
 	</div>

 </div>
   <div class="form-group">

 	{!! Form::label ('nombre_actividad', 'Nombre Actividad', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('nombre_actividad', $actividad->nombre_actividad, ['class'=>'form-control']) !!}
 	
 	</div>

 </div>

</div>
   <div class="form-group">

 	{!! Form::label ('descripcion', 'Descripcion', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('descripcion', $actividad->descripcion, ['class'=>'form-control']) !!}
 	
 	</div>

 </div>  
 </div>
   <div class="form-group">

 	{!! Form::label ('vigente', 'Vigente', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('vigente', $actividad->vigente, ['class'=>'form-control']) !!}
 	
 	</div>

 
 <div class="form-group">
 	<div class="col-md-offset-2 col-md-10">
 		 	{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
 	</div>

 </div>
 
 {!! Form::close() !!}
 @endsection 