<?php

class Image extends Eloquent {

	protected $table = 'image';
	protected $softDelete = true;
	
	//NOTE: Remove 'Plant Type'
	protected $fillable = array('Plant_ID', 'Date_Taken', 'Plant_Stage', 'Raw_Path', 'Processed_Height_Path', 'Processed_Tiller_Path', 'Processed_Biomass_Path');
	
	public function plant(){
		return $this->belongsTo('Plant', 'Plant_ID');
	}
	
}