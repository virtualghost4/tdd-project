@extends('layouts.app')

@section ('content')
 <div class="container" style="border-radius: 4ex">
 <br>
 <h2>Ingresar Institucion</h2>

 {!! Form::open(['url'=>'instituciones','class'=>'form-horizontal']) !!}

     <div class="form-group">
    {!! Form::label ('nombre_institucion','Nombre: ',['class'=>'control-label col-md-2'])!!}
    
    <div class="col-md-10">
        {!! Form::text('nombre_institucion', null, ['class'=>'form-control']) !!}
    </div>
 </div>
 
 <div class="form-group">
    {!! Form::label ('pais', 'Pais: ', ['class'=>'control-label col-md-2']) !!}
    <div class="col-md-10">
        {!! Form::text('pais', null, ['class'=>'form-control']) !!}
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
            {!! Form::text('id_internacional', null, ['class'=>'form-control']) !!}
    </div>
  </div>
  <div class="form-group">
  {!! Form::label ('rut_institucion', 'RUT: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('rut_institucion', null, ['class'=>'form-control']) !!}
  </div>
 </div>
 <div class="form-group">
  {!! Form::label ('razon_social', 'razon social: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('razon_social', null, ['class'=>'form-control']) !!}
  </div>
 </div>
 <div class="form-group">
  {!! Form::label ('direccion', 'Direccion: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('direccion', null, ['class'=>'form-control']) !!}
  </div>
 </div>
<div class="form-group">
  {!! Form::label ('telefono', 'Telefono: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('telefono', null, ['class'=>'form-control']) !!}
  </div>
 </div>
 <div class="form-group">
  {!! Form::label ('email', 'E-mail: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
  </div>
 </div>
 <div class="form-group">
  {!! Form::label ('link_institucion', 'Link: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('link_institucion', null, ['class'=>'form-control']) !!}
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