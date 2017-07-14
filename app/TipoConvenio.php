<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoConvenio extends Model
{
	protected $table = 'TiposConvenios';
    protected $fillable = ['id_tipo_convenio','nombre_tipo_convenio'];

    public $incremeting = true;

     public function convenio(){

    	return $this->hasMany('App\Convenio');	

    }
}

