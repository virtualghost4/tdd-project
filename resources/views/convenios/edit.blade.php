 @extends('layouts.app')

@section('content')
<!--  <p>Modificacion del Convenio ID: {{$convenio->id_convenio}}</p> -->

 {{ Form::open(['route'=>['updateConvenio',$convenio->id_convenio],'method' => 'PUT','class'=>'form-horizontal']) }}
 
<div class="col-md-12">

 <div class="panel panel-default">
  <div class="form-group form-inline">

    <div class="col-md-4 " style="margin-top: 1rem;" >
      {!! Form::label ('tipo_convenio','Tipo Convenio', ['class'=>'control-label col-md-2']) !!}

      <div class="col-md-4 col-md-offset-2 ">
       {!! Form::text('tipo_convenio', $convenio->tipo_convenio, ['class'=>'form-control']) !!}
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

<div class="form-group">

  {!! Form::label ('pais', 'Pais', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-3 ">
    {!! Form::text('pais', $convenio->pais, ['class'=>'form-control']) !!}

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
<div class="form-group">

  {!! Form::label ('estado', 'Estado', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::text('estado', $convenio->estado, ['class'=>'form-control']) !!}

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
<div class="form-group">
  {!! Form::label ('descripcion', 'Descripcion', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::textarea('descripcion', $convenio->descripcion, ['class'=>'form-control']) !!}

 </div>

</div>
<div class="form-group">

  {!! Form::label ('nombre_coordinador', 'Nombre Coordinador', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::text('nombre_coordinador', $convenio->nombre_coordinador, ['class'=>'form-control']) !!}
 </div>
</div>
</div>
<div class="form-group">

  {!! Form::label ('objetivo', 'Objetivo', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::text('objetivo', $convenio->objetivo, ['class'=>'form-control']) !!}

 </div>


</div>
<div class="form-group">

  {!! Form::label ('m_colaboracion', 'Modalidad de Colaboracion', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::text('m_colaboracion', $convenio->m_colaboracion, ['class'=>'form-control']) !!}

 </div>


</div>
<div class="form-group">

  {!! Form::label ('nombre_institucion', 'Nombre Institucion', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::text('nombre_institucion', $convenio->nombre_institucion, ['class'=>'form-control']) !!}

 </div>


</div>

<div class="form-group">

  {!! Form::label ('actividades', 'actividades', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::text('actividades', $convenio->actividades, ['class'=>'form-control']) !!}

 </div>


</div>
  
 <div class="form-group">
 	<div class="col-md-offset-2 col-md-10">
 		 	{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
 	</div>

 </div>
 
 {!! Form::close() !!}
 @endsection 