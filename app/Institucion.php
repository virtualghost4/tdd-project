<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table = 'Instituciones';

    protected $fillable = [
    	'id_institucion',
    	'nombre_institucion',
    	'pais',
    	'vigente',
    	'id_internacional',
    	'rut_institucion',
    	'razon_social',
		'direccion',
		'telefono',
		'email',
		'link_institucion',
    ];
}
