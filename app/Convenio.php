<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{     

    protected $table = 'convenios';  
    protected $fillable = ['id_convenio','id_tipo_convenio','id_coordinador','id_estado','id_area','nombre_convenio','fecha_de_inicio','fecha_termino','fecha_firma','fecha_decreto','nro_decreto','descripcion','vigente','vigencia'];
    
  
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
	/*tablas pivotes*/
	public function actividadconvenio(){

		return $this->hasMany('App\ActividadConvenio');
	}
	//return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
	public function institucion(){

		return $this->belongstoMany('App\ActividadConvenio','id_convenio');
	}
	public function modalidad(){

		return $this->hasMany('App\Modalidad','convenio_modalidad','id_convenio','id_modalidad');
	}
	

	
}