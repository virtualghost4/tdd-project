<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
	protected $table = 'documentos';
    protected $fillable= [
	    "id_documento",
	    "id_convenios",
	    "fecha_firma",
	    "fecha_decreto",
	    "nro_decreto"
	    ];

    public $incrementing = true;
    protected $primaryKey = 'id_convenios';
    
    public function Convenio(){

        return $this->belongsTo('App\Convenio');

    }
    
}