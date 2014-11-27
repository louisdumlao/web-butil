<?php

class Camera extends Eloquent {

	protected $table = 'camera';
	public $timestamps = false;

	protected $fillable = array('Current_Left_Plant_ID', 'Current_Right_Plant_ID');
	
	public function currentLeftPlant(){
		return $this->belongsTo('Plant', 'Current_Left_Plant_ID');
	}
	
	public function currentLeftPlant(){
		return $this->belongsTo('Plant', 'Current_Right_Plant_ID');
	}
}