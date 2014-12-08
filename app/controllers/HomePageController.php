<?php

class HomePageController extends BaseController {
	protected $layout = 'layouts.homepagelayout';
	
	protected function index()
	{
		$data = array(
			"username" => Session::get('username'),
			"password" => Session::get('password'),
		);

		$cameras = Camera::all();
		$plants = Plant::all();

		$this->layout->navbar = View::make('navbar', $data);
		$this->layout->homepage = View::make('homepage')->withCameras($cameras)->withPlants($plants);
	}
}