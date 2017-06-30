<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    Protected $table= "Documento";
    Protected $fillable= [
    "id_documento",
    "id_convenios",
    "fecha_firma",
    "fecha_decreto",
    "nro_decreto"
    ];
}
