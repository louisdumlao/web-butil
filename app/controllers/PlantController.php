<?php

class PlantController extends BaseController
{
	
	protected $layout = 'layouts.plantlayout';
	public function index($plant_id)
	{
		$data = array(
			"username" => Session::get('username'),
			"password" => Session::get('password'),
			"name" => Session::get('name'),
			"plant" => array(
				array(
					'name' => 'C41234567890',
					'dateplaced' => 'September 3, 2014 17:30:00',
					'type' => 'IR64',
					'stage' => 'Flowering',
					'comments' => 'Comment comment here'
				),
				array(
					array(
						'image' => 'assets/images/C41234567890.JPG',
						'id' => '0',
						'biomass' => '34.60',
						'height' => '30.20',
						'greenness' => '74.76',
						'tillercount' => '4',
						'datetaken' => 'October 22, 2014 17:30:00'
					),
					array(
						'image' => 'assets/images/C42345678901.JPG',
						'id' => '1',
						'biomass' => '32.00',
						'height' => '28.90',
						'greenness' => '80.32',
						'tillercount' => '12',
						'datetaken' => 'October 22, 2014 17:45:00',
					)
				)
			)
		);

		$plant = Plant::findOrFail($plant_id);
		$cameras = Camera::all();

		$this->layout->navbar = View::make('navbar', $data);
		$this->layout->content = View::make('plantView', $data)->withPlant($plant)->withCameras($cameras);;
		$this->layout->imageModal = View::make('modals.imageModal', $data)->withPlant($plant);
		$this->layout->settings = View::make('settings', $data);
	}

	public function addPlant(){
		//save model to db
		$plant = new Plant;
		$plant->Plant_Name =  Input::get('Plant_Name');
		$plant->Date_Placed = Input::get('Date_Placed');
		$plant->Plant_Stage =  Input::get('Plant_Stage');
		$plant->save();

		$cameraSlot = Input::get('Camera_ID_Side');
		if($cameraSlot != "none"){
			$camera_id = (int)substr($cameraSlot, 0, -1);
			$camera_side = substr($cameraSlot, -1);

			$camera = Camera::where('ID', $camera_id)->first();

			if($camera_side === 'L'){
				$camera->Current_Left_Plant_ID =  $plant->ID;
			}else{
				$camera->Current_Right_Plant_ID = $plant->ID;
			}
			$camera->save();
		}

		return Redirect::to('/');
	}

	public function editPlant($plantId){
		//save model to db
		$plant = Plant::findOrFail($plantId);
		$plant->Plant_Name =  Input::get('Plant_Name');
		$plant->Date_Placed = Input::get('Date_Placed');
		$plant->Plant_Stage =  Input::get('Plant_Stage');
		$plant->save();

		$cameraSlot = Input::get('Camera_ID_Side');
		if($cameraSlot != "none"){
			$camera_id = (int)substr($cameraSlot, 0, -1);
			$camera_side = substr($cameraSlot, -1);

			$camera = Camera::where('ID', $camera_id)->first();

			if($camera_side === 'L'){
				$camera->Current_Left_Plant_ID =  $plant->ID;
			}else{
				$camera->Current_Right_Plant_ID = $plant->ID;
			}
			$camera->save();
		}

		return Redirect::to('/plant/'.$plantId);
	}
}