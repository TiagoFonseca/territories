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
    Route::resource('map-requests', 'MapRequestsController');
    
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
   
    Route::get('maps/available', 'FrontendMapsController@available');
    Route::get('maps/unavailable', 'FrontendMapsController@unavailable');
    
    Route::resource('maps', 'FrontendMapsController');
    Route::get('map-request', 'MapRequestController@store');
   
    Route::resource('my-maps', 'FrontendMyMapsController');
    Route::resource('my-slips', 'FrontendSlipsController');
 
    
    Route::resource('my-details', 'FrontendUserDetaislController');
    
    
    Route::get('assignments/finished', 'AssignmentsController@finished');
    Route::get('assignments/unfinished', 'AssignmentsController@unfinished');
    
    Route::get('assignments/{assignment}', 'FrontendAssignmentsController@show');
    //Route::resource('slips', 'SlipsController');
    Route::resource('houses', 'HousesController');
    Route::resource('streets', 'StreetsController');
    
    // Route::get('assignments/{assignment}/slips/{slip}', function($assignment, $slip){
    //     'FrontendAssignmentsController@showSlip';
    //     });
    
     Route::post('changeHouseStatus', 'FrontendMyMapsController@houseStatus');
    //  Route::post('shareSlip', 'FrontendAssignmentsController@shareSlip');

    //::post('share/{ass_id}/{slip_id}', 'FrontendAssignmentHousesController@share')->name('slip.share');

    // if the variable Share is set to one this route will show the slip with ID = slipID
     Route::get('assignments/{assignmentID}/slips/{slipID}', 'FrontendAssignmentsController@showSlip');  
    
    Route::post('share', 'FrontendMyMapsController@share');  
    
    Route::post('changeHouseStatusShared', 'FrontendAssignmentsController@houseStatusShared');

    
     // route to the function that sets the field "Share" in all the houses belonging to a given assignment/slip to 1
     //Route::get('assignments/{assignmentID}/slips/{slipID}', 'FrontendMyMapsController@share');

});


