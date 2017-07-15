 @extends('layouts.app')

@section('content')

 <p>Modificacion de instituciones</p> 

<!--  <p>Modificacion del instituciones ID: {{$instituciones->id_instituciones}}</p> -->


 {{ Form::open(['route'=>['instituciones.update',$instituciones->id_institucion],'method' => 'PUT','class'=>'form-horizontal']) }}

 <div class="form-group">
    {!! Form::label ('nombre_institucion','Nombre: ',['class'=>'control-label col-md-2'])!!}
    
    <div class="col-md-10">
        {!! Form::text('nombre_institucion', $instituciones->nombre_institucion, ['class'=>'form-control']) !!}
    </div>
 </div>
 
 <div class="form-group">
    {!! Form::label ('pais', 'Pais: ', ['class'=>'control-label col-md-2']) !!}
    <div class="col-md-10">
        {!! Form::text('pais', $instituciones->pais, ['class'=>'form-control']) !!}
    </div>
 </div>

  <div class="form-group">
    {!! Form::label ('vigente', 'Vigente:', ['class'=>'control-label col-md-2']) !!}
    <div class="col-md-10">
        {!! Form::checkbox('vigente', false, ['class'=>'form-control']) !!}
      </div>
  </div>
  <div class="form-group">
    {!! Form::label ('id_internacional', 'ID Internacional: ', ['class'=>'control-label col-md-2']) !!}
    <div class="col-md-10">
            {!! Form::text('id_internacional', $instituciones->id_internacional, ['class'=>'form-control']) !!}
    </div>
  </div>
  <div class="form-group">
  {!! Form::label ('rut_institucion', 'RUT: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('rut_institucion', $instituciones->rut_institucion, ['class'=>'form-control']) !!}
  </div>
 </div>
 <div class="form-group">
  {!! Form::label ('razon_social', 'razon social: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('razon_social', $instituciones->razon_social, ['class'=>'form-control']) !!}
  </div>
 </div>
 <div class="form-group">
  {!! Form::label ('direccion', 'Direccion: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('direccion', $instituciones->direccion, ['class'=>'form-control']) !!}
  </div>
 </div>
<div class="form-group">
  {!! Form::label ('telefono', 'Telefono: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('telefono', $instituciones->telefono, ['class'=>'form-control']) !!}
  </div>
 </div>
 <div class="form-group">
  {!! Form::label ('email', 'E-mail: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('email', $instituciones->email, ['class'=>'form-control']) !!}
  </div>
 </div>
 <div class="form-group">
  {!! Form::label ('link_institucion', 'Link: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('link_institucion', $instituciones->link_institucion, ['class'=>'form-control']) !!}
  </div>
 </div>

</div>
  
 <div class="form-group">
 	<div class="col-md-offset-2 col-md-10">
 		 	{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
 	</div>

 </div>
 
 {!! Form::close() !!}
 @endsection 