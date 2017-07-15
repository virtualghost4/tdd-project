<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{     

    protected $table = 'convenios';
    protected $fillable = ['id_convenio','id_tipo_convenio','id_coordinador','id_estado','id_area','id_institucion','id_objetivo','id_modalidad','id_actividad','nombre_convenio','fecha_de_inicio','fecha_termino','fecha_firma','fecha_decreto','nro_decreto','descripcion','vigente','vigencia'];
    
  
	protected $primaryKey = 'id_convenio';
    public $incrementing = false;


 	public function tipoconvenio(){

 	return $this->belongsTo('App\TipoConvenio');

	}
	 public function coordinador(){

 	return $this->belongsTo('App\Coordinador');

	}
	public function estado(){

 	return $this->belongsTo('App\Estado');

	}

    public function area(){

 	return $this->belongsTo('App\Area');

	}
	public function institucion(){

 	return $this->belongsTo('App\Institucion');

	}
	public function objetivo(){

 	return $this->belongsTo('App\Objetivo');

	}

	public function documento(){

		return $this->hasMany('App\Documento');
	}
	/*tablas pivotes*/
	public function actividadconvenio(){

		return $this->hasMany('App\ActividadConvenio');
	}
	
	public function modalidad(){

		return $this->belongstoMany('App\Modalidad','convenio_modalidad','id_convenio','id_modalidad');
	}
	

	
}