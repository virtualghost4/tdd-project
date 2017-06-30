<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    Protected $table= "Usuarios";
    Protected $fillable= [
    "name",
    "email",
    "type",
    ];
}
