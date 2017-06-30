<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    Protected $table= "Convenios";
    Protected $fillable= [
    "id_convenios",
    "id_area",
    "id_user",
    "id_T_Convenio",
    "fecha_inicio",
    "fecha_termino",
    "description"
    ];
}
