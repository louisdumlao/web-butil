<?php

class PhenotypicData extends Eloquent {

	protected $table = 'phenotypic_data';
	public $timestamps = false;
	protected $softDelete = true;
	
	//NOTE: Remove 'Plant Type'
	protected $fillable = array('Image_ID', 'Height', 'Tiller_Count', 'Greenness', 'Diameter', 'Biomass');
	
	public function image(){
		return $this->belongsTo('Image', 'Image_ID');
	}
	
}