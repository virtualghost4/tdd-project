@extends('layouts.app')

@section ('content')
 <div class="container" style="border-radius: 4ex">
 <br>
 <h2>Ingresar documento</h2>

 {!! Form::open(['url'=>'documentos','class'=>'form-horizontal']) !!}

     <div class="form-group">
    {!! Form::label ('id_convenio','Convenio: ',['class'=>'control-label col-md-2'])!!}
    
    <div class="col-md-10">
        {!! Form::select('id_convenio', $convenios ,null, ['class'=>'form-control']) !!}
    </div>
 </div>
 
 <div class="form-group">
    {!! Form::label ('fecha_firma', 'Fecha Firma: ', ['class'=>'control-label col-md-2']) !!}
    <div class="col-md-10">
        {!! Form::text('fecha_firma', null, ['class'=>'form-control']) !!}
    </div>
 </div>

  <div class="form-group">
    {!! Form::label ('fecha_decreto', 'Fecha Decreto:', ['class'=>'control-label col-md-2']) !!}
    <div class="col-md-10">
        {!! Form::text('fecha_decreto', false, ['class'=>'form-control']) !!}
      </div>
  </div>
  <div class="form-group">
    {!! Form::label ('nro_decreto', 'Nro Decreto: ', ['class'=>'control-label col-md-2']) !!}
    <div class="col-md-10">
            {!! Form::text('nro_decreto', null, ['class'=>'form-control']) !!}
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