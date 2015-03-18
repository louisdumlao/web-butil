<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class PhenotypicData extends Eloquent {

	use SoftDeletingTrait;

	protected $table = 'phenotypic_data';
	public $timestamps = false;
	protected $softDelete = true;

	protected $primaryKey = 'ID';
	
	protected $fillable = array('Image_ID', 'Height', 'Tiller_Count', 'Greenness', 'Diameter', 'Biomass');
	
	public function image(){
		return $this->belongsTo('Image', 'Image_ID', 'ID');
	}
	
}