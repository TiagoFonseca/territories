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

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// 	]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// 'prefix', 'admin' part should be 'prefix' => 'admin'
Route::group(['prefix' => 'admin', 'namespace' => 'Admin',  'middleware' => 'auth',], function()
{
    Route::get('/', 'AdminDashboardController@index');
   
    Route::get('maps/available', 'MapsController@available');
    Route::get('maps/unavailable', 'MapsController@unavailable');
    
    Route::resource('maps', 'MapsController');
    Route::resource('users', 'UsersController');
    
    Route::get('assignments/finished', 'AssignmentsController@finished');
    Route::get('assignments/unfinished', 'AssignmentsController@unfinished');
    
    Route::resource('assignments', 'AssignmentsController');
    Route::resource('slips', 'SlipsController');
    Route::resource('houses', 'HousesController');
    Route::resource('streets', 'StreetsController');
});

Route::group([ 'namespace' => 'Frontend', 'middleware' => 'auth',], function()
{
    Route::get('/', 'FrontendController@index');
   
    Route::get('maps/available', 'MapsController@available');
    Route::get('maps/unavailable', 'MapsController@unavailable');
    
    Route::resource('maps', 'FrontendMapsController');
    Route::get('map-request', 'EmailsController@sendMapRequest');
   
    Route::get('my-maps', 'FrontendMapsController@my_maps');
    Route::resource('my-details', 'FrontendUserDetaislController');
    
   
    
    Route::get('assignments/finished', 'AssignmentsController@finished');
    Route::get('assignments/unfinished', 'AssignmentsController@unfinished');
    
    Route::resource('assignments', 'AssignmentsController');
    Route::resource('slips', 'SlipsController');
    Route::resource('houses', 'HousesController');
    Route::resource('streets', 'StreetsController');
});

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// 	]);
	
// 	Route::get('auth/register', [
//   'as' => 'register', 
//   'uses' => 'Auth\AuthController@getRegister'
// ]);

// Route::get('/', function () {
    
//     return view('auth/login');

// });
//Route::resource('admin/slips', 'Admin\\SlipsController');