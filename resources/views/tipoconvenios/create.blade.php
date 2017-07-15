@extends('layouts.app')

@section ('content')
 <div class="container" style="border-radius: 4ex">
 <br>
 <h2>Ingresar Tipo Convenio</h2>

 {!! Form::open(['url'=>'tipoconvenios','class'=>'form-horizontal']) !!}

     <div class="form-group">
    {!! Form::label ('nombre_tipo_convenio','Nombre: ',['class'=>'control-label col-md-2'])!!}
    
    <div class="col-md-10">
        {!! Form::text('nombre_tipo_convenio', null, ['class'=>'form-control']) !!}
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