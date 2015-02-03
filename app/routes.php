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
/*
Route::get('/', function()
{
	return View::make('hello');
});

/*Route::get('users', function()
{
    return 'Users!';
});*/
/*Route::get('users', 'UserController@getIndex');/

Route::get('users', function()
{
    return View::make('users');
});
*/
Route::get('/', 'HomeController@index');
Route::get('plant/{plant_id}', array('as' => 'plant', 'uses' => 'PlantController@index'))->where('plant_id', '[0-9]+');
Route::post('addPlant', array('as' => 'addPlant', 'uses' => 'PlantController@addPlant'));
Route::post('editPlant/{plantId}', array('as' => 'editPlant', 'uses' => 'PlantController@editPlant'))->where('plant_id', '[0-9]+');
Route::post('addAppointment', array('as' => 'addAppointment', 'uses' => 'PlantController@addAppointment'));
Route::get('logout', array('as' => 'user', 'uses' => 'UserController@index'));
Route::get('home', array('as' => 'home', 'uses' => 'HomePageController@index'));

/*Route::controller('plants', 'PlantController');*/