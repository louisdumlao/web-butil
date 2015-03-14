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
		$cameraAppointments = CameraAppointment::where('Date_Taken', '>', date("Y-m-d H:i:s", strtotime("now")))->groupBy('Date_Taken')->orderBy("Date_Taken", 'desc')->get();

		$this->layout->navbar = View::make('navbar', $data)->with('camera_appointments',$cameraAppointments);
		$this->layout->homepage = View::make('homepage')->withCameras($cameras)->withPlants($plants);
	}
}