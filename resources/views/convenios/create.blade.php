@extends('layouts.app')

@section ('content')

<br>
<div class="container " style="padding: 15px;">
  <h2>Registrar Convenio</h2>
  <div class="row">

    {!! Form::open(['url'=>'convenios','class'=>'form-horizontal']) !!}
    <div class="col-md-12">

     <div class="panel panel-default">
      <div class="form-group form-inline">

        <div class="col-md-4 " style="margin-top: 1rem;" >
          {!! Form::label ('id_tipo_convenio','Tipo Convenio', ['class'=>'control-label col-md-2']) !!}

          <div class="col-md-4 col-md-offset-2 ">
             {!! Form::select('id_tipo_convenio', $tipo_convenio, null, array('class' => 'form-control')) !!}
         </div>

       </div>


       <div class="col-md-4 col-md-offset-3" style="margin-top: 1rem;"  >

         {!! Form::label ('id_area','Area', ['class'=>'control-label col-md-4']) !!}

         <div class="col-md-3 col-md-offset-2  ">

          {!! Form::select('id_area', $areas, null, array('class' => 'form-control')) !!}

        </div>



      </div>
    </div>

    <div class="form-group"  style="margin-right:  0.5rem; margin-left:  0.5rem; ">



      {!! Form::label ('nombre_convenio', 'Nombre Convenio', ['class'=>'control-label col-md-2']) !!}
      <div class="col-md-10">
        {!! Form::text('nombre_convenio', null, ['class'=>'form-control']) !!}

      </div>
    </div>

   <!--  <div class="form-group">

      {!! Form::label ('pais', 'Pais', ['class'=>'control-label col-md-2']) !!}
      <div class="col-md-3 ">
        {!! Form::text('pais', null, ['class'=>'form-control']) !!}

      </div>

    </div> -->
<div class="row">

    <div class="form-inline col-md-12 col-md-offset-1">

      <div class="form-group col-md-4 ">

        {!! Form::label ('fecha_de_inicio', 'Fecha Inicio', ['class'=>'control-label col-md-2']) !!}
        <div class="col-md-10">
         {!! Form::text('fecha_de_inicio', null, ['class'=>'form-control']) !!}


       </div>


     </div>

     <div class="form-group col-md-4">

      {!! Form::label ('fecha_termino', 'Fecha Termino', ['class'=>'control-label col-md-2']) !!}
      <div class="col-md-10">
       {!! Form::text('fecha_termino', null, ['class'=>'form-control']) !!}

     </div>


   </div>

   <div class="form-group col-md-4">

    {!! Form::label ('estado', 'Estado', ['class'=>'control-label col-md-2']) !!}
    <div class="col-md-10">
        {!! Form::select('id_estado', $estados, null, array('class' => 'form-control')) !!}

   </div>


 </div>
</div>
</div>
<div class="row">
<div class="form-inline col-md-12 col-md-offset-1 ">

 <div class="form-group col-md-4">


  {!! Form::label ('fecha_firma', 'Fecha Firma', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::text('fecha_firma', null, ['class'=>'form-control']) !!}

 </div>


</div>

<div class="form-group col-md-4">

  {!! Form::label ('fecha_decreto', 'Fecha Decreto', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::text('fecha_decreto', null, ['class'=>'form-control']) !!}

 </div>


</div>

<div class="form-group col-md-4">

  {!! Form::label ('nro_decreto', 'N. Decreto', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10 ">
   {!! Form::text('nro_decreto', null, ['class'=>'form-control']) !!}

 </div>


    </div>
  </div>
</div>

<div class="row">
<div class="form-group " style=" resize:none; margin-right: 2rem; margin-left: 2rem; margin-top: 10rem;"  >
  {!! Form::label ('descripcion', 'Descripcion', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
   {!! Form::textarea('descripcion', null, ['class'=>'form-control']) !!}

 </div>

</div>
</div>
<div class="form-group" style="margin-right: 1rem; margin-left: 1rem;">

  {!! Form::label ('id_coordinador', 'Nombre Coordinador', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
     {!! Form::select('id_coordinador', $coordinadores, null, array('class' => 'form-control')) !!}
 </div>
</div>

<div class="form-group" style="margin-right: 1rem; margin-left: 1rem;">

  {!! Form::label ('id_objetivo', 'Nombre Objetivo', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
     {!! Form::select('id_objetivo', $objetivos, null, array('class' => 'form-control')) !!}
 </div>
</div>
<div class="form-group" style="margin-right: 1rem; margin-left: 1rem;">

  {!! Form::label ('id_modalidad', 'Nombre Modalidad', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
     {!! Form::select('id_modalidad', $modalidades, null, array('class' => 'form-control')) !!}
 </div>
</div>
<div class="form-group" style="margin-right: 1rem; margin-left: 1rem;">

  {!! Form::label ('id_institucion', 'Nombre Institucion', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
     {!! Form::select('id_institucion', $instituciones, null, array('class' => 'form-control')) !!}
 </div>
</div>

<div class="form-group" style="margin-right: 1rem; margin-left: 1rem;">

  {!! Form::label ('id_actividad', 'Nombre Actividad', ['class'=>'control-label col-md-2']) !!}
  <div class="col-md-10">
     {!! Form::select('id_actividad', $actividades, null, array('class' => 'form-control')) !!}
 </div>
</div>


</div>


<div class="form-group">
  <div class="col-md-offset-2 col-md-10">
   {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
 </div>

</div>
</div>
</div>
{{ Form::close() }}
@endsection 