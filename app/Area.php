<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['id_area','nombre'];

    public $incremeting = true;
}
 