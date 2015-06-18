<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|Creando Rutas
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',


]);

//Route::resource('campus', 'CampusController');

Route::get('login', function()
{ //voy a la vista login
 
   return view('Login.login');
});

Route::get('prueba', function()
{ //voy a la vista login
 
   return view('prueba');
});

Route::post("login","LoginController@acceder2");



Route::resource('admin', 'AdminController');
//Route::get('cambiarperfil'.'AdminController@cambiarPerfil');
//Route::get('archivar', 'AdminController@archive');



Route::resource('docentes','DocentesController');

Route::resource('estudiantes','EstudiantesController');
//Route::get('consultas'.'EstudiantesController@consultas');

Route::resource('encargado','EncargadoCampusController');


//Route::Controller('Archivo','ArchivosController');



