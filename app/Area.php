<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['id_area','nombre_area'];

    public $incremeting = true;

     public function convenio(){

    	return $this->belongsTo('App\Convenio');	

    }
}
