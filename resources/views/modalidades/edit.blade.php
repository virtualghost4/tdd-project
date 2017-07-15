@extends('layouts.app')

@section('content')

 

 {{ Form::open(['route'=>['modalidades.update',$modalidad->id_modalidad],'method' => 'PUT','class'=>'form-horizontal']) }}
 
  <div class="form-group">

 	{!! Form::label ('nombre_modalidad', 'Nombre modalidad', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('nombre_modalidad', $modalidad->nombre_modalidad, ['class'=>'form-control']) !!}
 	
 	</div>

 </div>

  
 <div class="form-group">
 	<div class="col-md-offset-2 col-md-10">
 		 	{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
 	</div>

 </div>
 
 {!! Form::close() !!}
 @endsection 