<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/teil2', 'Teil2Controller@zeige');
Route::get('/teil2/{parameter}', 'Teil2Controller@mitParam');
Route::get('/teil2/2/{parameter}', 'Teil2Controller@mitParam2');

Route::get('/teil3', 'Teil3Controller@formular');
Route::post('/teil3', 'Teil3Controller@speichern');
Route::get('/teil3/danke', 'Teil3Controller@danke');

Route::get('/teil4', 'Teil4Controller@index');
Route::get('/teil4/post', 'Teil4Controller@formular');
Route::post('/teil4/post', 'Teil4Controller@speichern');


