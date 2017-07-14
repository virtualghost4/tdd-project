<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
	protected $table 'areas';
    protected $fillable = ['id_area','nombre_area'];

    public $incremeting = true;

     public function convenio(){

    	return $this->hasMany('App\Convenio');	

    }
}

