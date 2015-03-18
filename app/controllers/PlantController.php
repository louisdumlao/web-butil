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
		$cameraAppointments = CameraAppointment::where('Date_Taken', '>', date("Y-m-d H:i:s", strtotime("now")))->groupBy('Date_Taken')->orderBy("Date_Taken", 'asc')->get();

		$this->layout->navbar = View::make('navbar', $data)->withCameraAppointments($cameraAppointments);
		$this->layout->content = View::make('plantView', $data)->withPlant($plant)->withCameras($cameras);
		$this->layout->imageModal = View::make('modals.imageModal', $data)->withPlant($plant);
		$this->layout->settings = View::make('settings', $data);
	}

	public function addPlant(){
		//save model to db
		$plant = new Plant;
		$plant->Plant_Name =  Input::get('Plant_Name');
		$plant->Date_Placed = date("Y-m-d H:i:s", strtotime(Input::get('Date_Placed')));
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
		$plant->Date_Placed = date("Y-m-d H:i:j", strtotime(Input::get('Date_Placed')));
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
		else{
			$camera;
			if(($camera = Camera::where('Current_Left_Plant_ID','=', $plant->ID)->first()) != null){
				$camera->Current_Left_Plant_ID =  null;
				$camera->save();
			}
			elseif(($camera = Camera::where('Current_Right_Plant_ID','=', $plant->ID)->first()) != null){
				$camera->Current_Right_Plant_ID = null;
				$camera->save();
			}
		}

		return Redirect::to('/plant/'.$plantId);
	}

	public function addAppointment(){
		//save model to db
		$cameras = Camera::all();

		foreach($cameras as $camera){
			$cameraAppointment = new CameraAppointment;
			$cameraAppointment->Date_Taken = date("Y-m-d H:i:j", strtotime(Input::get('Date_Taken')));
			$cameraAppointment->Camera_ID = $camera->ID;
			$cameraAppointment->Interval = Input::get('Interval');
			$cameraAppointment->save();
		}

		return Redirect::to('/');
	}

	public function addCamera(){
		//save model to db
		$camera = new Camera;

		$camera->Username = Input::get('Camera_Username');
		$camera->Password = Input::get('Camera_Password');
		$camera->IP_Address = Input::get('IP_Address');
		$camera->save();

		return Redirect::to('/');
	}

	public function plantsAction(){
		//save model to db
		$plants = Input::get('plant');
		foreach($plants as $plantID){
			$camera = Camera::where('Current_Left_Plant_ID', $plantID)->first();
			if($camera != null){
				$camera->Current_Left_Plant_ID = null;
				$camera->save();
			}
			$camera = Camera::where('Current_Right_Plant_ID', $plantID)->first();
			if($camera != null){
				$camera->Current_Right_Plant_ID = null;
				$camera->save();
			}
			
		}
		if (Input::get('action') == "Delete") {
			foreach($plants as $plantID){
				$plant = Plant::find($plantID);
				// foreach($plant->images()->get() as $image){
				// 	$image->phenotypicData()->delete();
				// }
				// $plant->images()->delete();
				$plant->delete();
			}
		}
		return Redirect::to('/');
	}
}