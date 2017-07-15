@extends('layouts.app')

@section('content')

 

 {{ Form::open(['route'=>['areas.update',$area->id_area],'method' => 'PUT','class'=>'form-horizontal']) }}
 
  <div class="form-group">

 	{!! Form::label ('nombre_area', 'Nombre Area', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('nombre_area', $area->nombre_area, ['class'=>'form-control']) !!}
 	
 	</div>

 </div>

  
 <div class="form-group">
 	<div class="col-md-offset-2 col-md-10">
 		 	{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
 	</div>

 </div>
 
 {!! Form::close() !!}
 @endsection 