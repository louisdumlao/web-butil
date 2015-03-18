<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class CameraAppointment extends Eloquent {

	use SoftDeletingTrait;

	protected $table = 'camera_appointment';
	public $timestamps = false;
	protected $softDelete = true;
	
	protected $primaryKey = 'ID';
	
	protected $fillable = array('Date_Taken', 'Camera_ID', 'Interval');
	
	public function camera(){
		return $this->belongsTo('Camera', 'Camera_ID');
	}
	
}