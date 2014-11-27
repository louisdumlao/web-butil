<?php

class CameraAppointment extends Eloquent {

	protected $table = 'camera_appointment';
	protected $softDelete = true;
	
	protected $fillable = array('Date_Taken', 'Camera_ID', 'Interval');
	
	public function camera(){
		return $this->belongsTo('Camera', 'Camera_ID');
	}
	
}