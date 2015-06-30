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
Route::get('/home', function(){
	return redirect('/');	
});
Route::get('/', function(){
	return redirect('profesores');
});

Route::group(['middleware' => ['auth']], function()
{
	Route::resource('profesores', 'ProfesorController');
	Route::resource('cursos', 'CursosController');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
