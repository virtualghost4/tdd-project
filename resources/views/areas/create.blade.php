@extends('layouts.app')

@section ('content')
<div class="container" style="border-radius: 4ex">
<br>
<h2>Registrar Area</h2>


{!! Form::open(['url'=>'areas','class'=>'form-horizontal']) !!}
  <div class="form-group">
    {!! Form::label ('nombre_area','Nombre: ',['class'=>'control-label col-md-2'])!!}
    <div class="col-md-10">
      {!! Form::text('nombre_area', null, ['class'=>'form-control']) !!}
    </div>
  </div>


</div>

<div class="form-group">
  <div class="col-md-offset-2 col-md-10">
   {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
 </div>

</div>
</div>

{{ Form::close() }}
@endsection 