<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Plant extends Eloquent {

	use SoftDeletingTrait;

	protected $table = 'plant';
	public $timestamps = false;
	protected $softDelete = true;

	protected $primaryKey = 'ID';

	protected $fillable = array('Plant_Name', 'Date_Placed', 'Plant_Stage');
	
	public function images()
    {
        return $this->hasMany('Image', 'Plant_ID', 'ID');
    }
	
	public function cameraLeft(){
		return $this->hasOne('Camera', 'Current_Left_Plant_ID');
	}

	public function cameraRight(){
		return $this->hasOne('Camera', 'Current_Right_Plant_ID');
	}
}