<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
	protected $table = 'modalidades';
    protected $fillable = ['id_modalidad','nombre_modalidad'];
    protected $primaryKey = 'id_modalidad';
    public $incremeting = true;

     public function convenio(){

    	return $this->belongstoMany('App\Convenio');	

    }
    
}
