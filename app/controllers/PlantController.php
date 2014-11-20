<?php

class PlantController extends BaseController
{
	
	protected $layout = 'layout';
	public function index()
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
		
		$this->layout->content = View::make('plantView', $data);
		$this->layout->imageModal = View::make('imageModal', $data);
		$this->layout->settings = View::make('settings', $data);
		$this->layout->addPlantModal = View::make('addPlantModal', $data);
	}
}