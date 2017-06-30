<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    Protected $table= "Institucion";
    Protected $fillable= [
    "id_institucion",
    "pais",
    "id_convenios",
    "id_tipo_institucion"
    ];
}
