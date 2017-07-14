 @extends('layouts.app')

@section('content')

 <p>Modificacion de Convenio</p> 

<!--  <p>Modificacion del Convenio ID: {{$convenio->id_convenio}}</p> -->


 {{ Form::open(['route'=>['instituciones.update'],'method' => 'PUT','class'=>'form-horizontal']) }}

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