<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
	protected $table = 'estados';
    protected $fillable = ['id_estado','nombre_estado'];
    protected $primaryKey = 'id_estado';
    public $incremeting = true;

     public function convenio(){

    	return $this->hasMany('App\Convenio');	

    }
}
