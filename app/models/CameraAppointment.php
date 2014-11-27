<?php

class CameraAppointment extends Eloquent {

	protected $table = 'camera_appointment';
	public $timestamps = false;
	protected $softDelete = true;
	
	protected $primaryKey = 'ID';
	
	protected $fillable = array('Date_Taken', 'Camera_ID', 'Interval');
	
	public function camera(){
		return $this->belongsTo('Camera', 'Camera_ID');
	}
	
}