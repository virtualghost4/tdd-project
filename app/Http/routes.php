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

Route::resource('area', 'AreaController');

Route::resource('institucion', 'InstitucionController');

Route::group(['conv'=>'convenios'],function(){

	Route::get('/convenios','ConveniosController@index');
	Route::get('create','ConveniosController@create');
	Route::get('eliminar','ConveniosController@destroy');
	Route::post('store',['as'=>'store','uses'=>'ConveniosController@store']);
});

Route::group(['ar'=>'area'],function(){

	Route::get('/area','AreaController@index');
	Route::get('create','AreaController@create');
	Route::get('eliminar','AreaController@destroy');
	Route::post('store',['as'=>'store','uses'=>'AreaController@store']);
});

Route::group(['inst'=>'institucion'],function(){

	Route::get('/institucion','InstitucionController@index');
	Route::get('create','InstitucionController@create');
	Route::get('eliminar','InstitucionController@destroy');
	Route::post('store',['inst'=>'store','uses'=>'InstitucionController@store']);
});

