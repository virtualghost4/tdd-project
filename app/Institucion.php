<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
     protected $fillable = ['id_institucion','nombre','tipo','pais'];

    public $incremeting = true;
}
