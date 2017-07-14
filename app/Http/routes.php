<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/home', 'HomeController@index');
Route::resource('convenios', 'ConveniosController');
Route::resource('areas', 'AreasController');
Route::resource('instituciones', 'InstitucionesController');
Route::get('instituciones/{id_institucion}/destroy',[
		'uses' =>'InstitucionesController@destroy',
		'as' =>'instituciones.destroy'
	]);
Route::resource('actividadesconvenios','ActividadesConveniosController');
Route::resource('coordinadores','CoordinadoresController');
Route::resource('estados','EstadosController');
Route::resource('modalidades','ModalidadesController');
Route::resource('tipoconvenios','TipoConveniosController');
Route::resource('objetivos','ObjetivosController');
