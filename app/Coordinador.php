<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model


{
	protected $table='coordinadores';
    protected $fillable = ['id_coordinador','id_institucion','rut_coordinador','nombre_coordinador','fecha_de_inicio','fecha_termino','vigencia','descripcion','unidad_academica','email'];

    public $incremeting = true;
    protected $primaryKey = 'id_coordinador';

    public function convenio(){
    	return $this->belongTo('App\Convenio');	

    }
       public function institucion(){

    	return $this->belongTo('App\institucion');	

    }
}

