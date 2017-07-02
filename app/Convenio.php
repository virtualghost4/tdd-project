<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{     

    protected $fillable = ['id_convenio','nombre','id_area','id_coordinador','id_t_convenio','fecha_de_inicio','fecha_termino','vigencia','objetivo','descripcion'];
    
/*
	protected $primaryKey = 'id_convenio';*/
    public $incrementing = true;
    

	/*public function clientes(){

    	return $this->hasMany('App\Cliente', 'numero_de_serie');	

    }
    public function contadors(){

    	return $this->hasMany('App\Contador');	

    }
    public function arriendos(){

    	return $this->hasMany('App\Arriendo');

    }//*/
}
