<?php

class HomePageController extends BaseController {
	protected $layout = 'homepagelayout';
	
	protected function index()
	{
		$data = array(
			"username" => Session::get('username'),
			"password" => Session::get('password'),
		);
		$this->layout->navbar = View::make('navbar', $data);
		$this->layout->homepage = View::make('homepage', $data);
	}
}