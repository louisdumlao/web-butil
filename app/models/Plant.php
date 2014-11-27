<?php

class Plant extends Eloquent {

	protected $table = 'plant';
	protected $softDelete = true;

	protected $fillable = array('Plant_Name', 'Date_Placed', 'Plant_Stage','Plant_Type', 'Comments');
	
	public function images()
    {
        return $this->hasMany('Image');
    }
	
}