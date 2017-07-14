<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadConvenio extends Model
{
	protected $table = 'actividadesconvenios';

    protected $fillable = ['id_convenio','id_coordinador','id_actividad','fecha_inicio','fecha_fin','estado','nombre_actividad','descripcion','vigente'];

    public $incremeting = true;

     public function convenio(){

    	return $this->belongsTo('App\Convenio');

    }
    public function coordinador(){

 	return $this->belongsTo('App\Coordinador');

	}
}
