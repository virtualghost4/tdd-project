@extends('layouts.app')

@section ('content')
 <div class="container" style="border-radius: 4ex">
 <br>
 <h2>Ingresar Actividad Convenio</h2>

 {!! Form::open(['url'=>'actividadesconvenios','class'=>'form-horizontal']) !!}
  <div class="form-group">
    {!! Form::label ('id_convenio','Convenio: ',['class'=>'control-label col-md-2'])!!}
    
    <div class="col-md-10">
        {!! Form::select('id_convenio',$convenios, null, array('class' => 'form-control')) !!}
    </div>
  </div>

  <div class="form-group">
    {!! Form::label ('id_coordinador','Coordinador: ',['class'=>'control-label col-md-2'])!!}
    
    <div class="col-md-10">
        {!! Form::select('id_coordinador', $coordinadores, null, array('class' => 'form-control')) !!}
    </div>
  </div>


  <div class="form-group">
    {!! Form::label ('fecha_inicio','Fecha Inicio: ',['class'=>'control-label col-md-2'])!!}
    
    <div class="col-md-10">
        {!! Form::text('fecha_inicio', null, ['class'=>'form-control']) !!}
    </div>
  </div>
 
 <div class="form-group">
    {!! Form::label ('fecha_fin', 'Fecha Fin: ', ['class'=>'control-label col-md-2']) !!}
    <div class="col-md-10">
        {!! Form::text('fecha_fin', null, ['class'=>'form-control']) !!}
    </div>
 </div>

  <div class="form-group">
    {!! Form::label ('estado', 'Estado:', ['class'=>'control-label col-md-2']) !!}
    <div class="col-md-10">
        {!! Form::checkbox('estado', false, ['class'=>'form-control']) !!}
      </div>
  </div>
  <div class="form-group">
    {!! Form::label ('nombre_actividad', 'Nombre: ', ['class'=>'control-label col-md-2']) !!}
    <div class="col-md-10">
            {!! Form::text('nombre_actividad', null, ['class'=>'form-control']) !!}
    </div>
  </div>
  <div class="form-group">
  {!! Form::label ('descripcion', 'Descripcion: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('descripcion', null, ['class'=>'form-control']) !!}
  </div>
 </div>
 <div class="form-group">
  {!! Form::label ('vigente', 'Vigente?: ', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
    {!! Form::text('vigente', null, ['class'=>'form-control']) !!}
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