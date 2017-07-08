<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    Protected $table= "Actividades";
    Protected $fillable= [
    "id_actividades",
    "id_convenios",
    "id_tipo_actividad",
    "description",
    "estado"
    ];
}
