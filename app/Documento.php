<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    Protected $fillable= [
    "id_documento",
    "id_convenios",
    "fecha_firma",
    "fecha_decreto",
    "nro_decreto"
    ];

    public $incrementing = true;

    /*
    public function Convenio(){

        return $this->belongsTo('App\Convenio');

    }
    */
}
