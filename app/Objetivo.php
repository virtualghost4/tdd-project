<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
    protected $table = 'objetivos';
    protected $fillable = ['id_objetivo','nombre_objetivo'];

    public function convenio(){
    	return $this->belongTo('App\Convenio');
    }
}
