 @extends('layouts.app')

@section('content')

 <p>Modificacion del Convenio ID: {{$convenio->id_convenio}}</p> 

<!--  <p>Modificacion del Convenio ID: {{$convenio->id_convenio}}</p> -->


 {{ Form::open(['route'=>['convenios.update',$convenio->id_convenio],'method' => 'PUT','class'=>'form-horizontal']) }}
 
<div class="col-md-12">

 <div class="panel panel-default">
  <div class="form-group form-inline">

  <div class="col-md-4 " style="margin-top: 1rem;" >
          {!! Form::label ('id_tipo_convenio','Tipo Convenio', ['class'=>'control-label col-md-2']) !!}

          <div class="col-md-4 col-md-offset-2 ">
             {!! Form::select('id_tipo_convenio', $tipo_convenio, $convenio->id_tipo_convenio, array('class' => 'form-control')) !!}
         </div>

       </div>



   <div class="col-md-8" style="margin-top: 1rem;"  >

   {!! Form::label ('id_area','Area', ['class'=>'control-label col-md-4']) !!}

    <div class="col-md-3 col-md-offset-2  ">

      {!! Form::select('id_area', $areas, $convenio->id_area, array('class' => 'form-control')) !!}

    </div>



</div>
</div>

<div class="form-group">



  {!! Form::label ('nombre_convenio', 'Nombre Convenio', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-8 ">
    {!! Form::text('nombre_convenio', $convenio->nombre_convenio, ['class'=>'form-control']) !!}

  </div>
</div>



<div class="form-inline col-md-10 col-md-offset-2">
<div class="form-group">

  {!! Form::label ('fecha_de_inicio', 'Fecha Inicio', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::text('fecha_de_inicio', $convenio->fecha_de_inicio, ['class'=>'form-control']) !!}

 </div>


</div>
<div class="form-group">

  {!! Form::label ('fecha_termino', 'Fecha Termino', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::text('fecha_termino', $convenio->fecha_termino, ['class'=>'form-control']) !!}

 </div>

 
</div>
   <div class="form-group col-md-4">

    {!! Form::label ('estado', 'Estado', ['class'=>'control-label col-md-2']) !!}
    <div class="col-md-10">
        {!! Form::select('id_estado', $estados, null, array('class' => 'form-control')) !!}

   </div>


 </div>
</div>
<div class="form-inline col-md-10 col-md-offset-2">
<div class="form-group">

  {!! Form::label ('fecha_firma', 'Fecha Firma', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::text('fecha_firma', $convenio->fecha_firma, ['class'=>'form-control']) !!}

 </div>


</div>
<div class="form-group">

  {!! Form::label ('fecha_decreto', 'Fecha Decreto', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::text('fecha_decreto', $convenio->fecha_decreto, ['class'=>'form-control']) !!}

 </div>


</div>




<div class="form-group">

  {!! Form::label ('nro_decreto', 'Nro. Decreto', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::text('nro_decreto', $convenio->nro_decreto, ['class'=>'form-control']) !!}

 </div>


</div>
</div>
<div class="form-group" style=" resize:none; margin-right: 2rem; margin-left: 2rem; margin-top: 10rem;">
  {!! Form::label ('descripcion', 'Descripcion', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::textarea('descripcion', $convenio->descripcion, ['class'=>'form-control']) !!}

 </div>




</div>
<div class="form-group" style="margin-right: 1rem; margin-left: 1rem;">

  {!! Form::label ('nombre_coordinador', 'Nombre Coordinador', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
     {!! Form::select('id_coordinador', $coordinadores, $convenio->id_coordinador, array('class' => 'form-control')) !!}
 </div>
</div>

<div class="form-group" style="margin-right: 1rem; margin-left: 1rem;">

  {!! Form::label ('nombre_objetivo', 'Nombre Objetivo', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
     {!! Form::select('id_objetivo', $objetivos, $convenio->id_objetivo, array('class' => 'form-control')) !!}
 </div>
</div>
<div class="form-group" style="margin-right: 1rem; margin-left: 1rem;">

  {!! Form::label ('nombre_modalidad', 'Nombre Modalidad', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
     {!! Form::select('id_modalidad', $modalidades, $convenio->id_modalidad, array('class' => 'form-control')) !!}
 </div>
</div>
<div class="form-group" style="margin-right: 1rem; margin-left: 1rem;">

  {!! Form::label ('nombre_institucion', 'Nombre Institucion', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
     {!! Form::select('id_institucion', $instituciones, $convenio->id_institucion, array('class' => 'form-control')) !!}
 </div>
</div>

<div class="form-group" style="margin-right: 1rem; margin-left: 1rem;">

  {!! Form::label ('nombre_actividad', 'Nombre Actividad', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
     {!! Form::select('id_actividad', $actividades, $convenio->id_actividad, array('class' => 'form-control')) !!}
 </div>
</div>
 <div class="form-group">
 	<div class="col-md-offset-2 col-md-10">
 		 	{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
 	</div>

 </div>
 
 {!! Form::close() !!}
 @endsection 