@extends('layouts.app')

@section('content')

 

 {{ Form::open(['route'=>['tipoconvenios.update',$tipo_convenio->id_tipo_convenio],'method' => 'PUT','class'=>'form-horizontal']) }}
 
  <div class="form-group">

 	{!! Form::label ('nombre_tipo_convenio', 'Nombre tipo_convenio', ['class'=>'control-label col-md-2']) !!}
 	<div class="col-md-10">
 		{!! Form::text('nombre_tipo_convenio', $tipo_convenio->nombre_tipo_convenio, ['class'=>'form-control']) !!}
 	
 	</div>

 </div>

  
 <div class="form-group">
 	<div class="col-md-offset-2 col-md-10">
 		 	{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
 	</div>

 </div>
 
 {!! Form::close() !!}
 @endsection 