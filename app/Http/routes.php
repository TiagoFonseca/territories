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


Route::get('maps/available', 'MapsController@available');
Route::get('maps/unavailable', 'MapsController@unavailable');

Route::resource('maps', 'MapsController');

Route::get('assignments/finished', 'AssignmentsController@finished');
Route::get('assignments/unfinished', 'AssignmentsController@unfinished');

Route::resource('assignments', 'AssignmentsController');
Route::resource('slips', 'SlipsController');
Route::resource('houses', 'HousesController');
Route::resource('streets', 'StreetsController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);
