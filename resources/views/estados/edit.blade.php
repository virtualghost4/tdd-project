@extends('layouts.app')

@section('content')

 

 {{ Form::open(['route'=>['estados.update',$estado->id_estado],'method' => 'PUT','class'=>'form-horizontal']) }}
 
  <div class="form-group">

 	{!! Form::label ('nombre_estado', 'Nombre Estado', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('nombre_estado', $estado->nombre_estado, ['class'=>'form-control']) !!}
 	
 	</div>

 </div>

  
 <div class="form-group">
 	<div class="col-md-offset-2 col-md-10">
 		 	{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
 	</div>

 </div>
 
 {!! Form::close() !!}
 @endsection 