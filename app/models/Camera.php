<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Camera extends Eloquent {

	use SoftDeletingTrait;

	protected $table = 'camera';
	public $timestamps = false;

	protected $primaryKey = 'ID';

	protected $fillable = array('Current_Left_Plant_ID', 'Current_Right_Plant_ID');
	protected $hidden = array('IP_Address','Username','Password');
	
	public function currentLeftPlant(){
		return $this->belongsTo('Plant', 'Current_Left_Plant_ID');
	}
	
	public function currentRightPlant(){
		return $this->belongsTo('Plant', 'Current_Right_Plant_ID');
	}
}