<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Image extends Eloquent {

	use SoftDeletingTrait;

	protected $table = 'image';
	public $timestamps = false;
	protected $softDelete = true;

	protected $primaryKey = 'ID';
	
	protected $fillable = array('Plant_ID', 'Date_Taken', 'Plant_Stage', 'Raw_Path', 'Processed_Height_Path', 'Processed_Tiller_Path', 'Processed_Greeness_Path','Processed_Biomass_Path');
	
	public function plant(){
		return $this->belongsTo('Plant', 'Plant_ID', 'ID');
	}

	public function phenotypicData(){
		return $this->hasOne('PhenotypicData', 'Image_ID', 'ID');		
	}
	
}