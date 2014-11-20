<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		
		$userdata = array(
				"username" => "Elisha",
				"password" => "Gonzabebe",
				"name" => "Elisha Gonzales"
			);
		
		if (Session::get('username')!="") {
			return Redirect::route('user');
		}
		else {
			return Redirect::route('plant')->with('username', $userdata['username'])
				->with('password', $userdata['password'])
				->with('name', $userdata['name']);
		}
	}

}
