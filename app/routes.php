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
Route::get('plant', array('as' => 'plant', 'uses' => 'PlantController@index'));
Route::get('logout', array('as' => 'user', 'uses' => 'UserController@index'));

Route::get('/home', function()
{
    return View::make('homepage');
});

/*Route::controller('plants', 'PlantController');*/