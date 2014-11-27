<?php

class PhenotypicDataTableSeeder extends Seeder {

    public function run()
    {
        DB::table('phenotypic_data')->delete();

        PhenotypicData::create(array(
            'ID' => 1,
        	'Image_ID' => 1,
        	'Height' => 10.1,
        	'Tiller_Count' => 22,
            'Greenness' => 1,
            'Diameter' => 5,
            'Biomass' => 100,
        	));

        PhenotypicData::create(array(
            'ID' => 2,
            'Image_ID' => 2,
            'Height' => 20,
            'Tiller_Count' => 12,
            'Greenness' => 2,
            'Diameter' => 9,
            'Biomass' => 200,
            ));

        PhenotypicData::create(array(
            'ID' => 3,
            'Image_ID' => 3,
            'Height' => 10.1,
            'Tiller_Count' => 11,
            'Greenness' => 3,
            'Diameter' => 7,
            'Biomass' => 233,
            ));

        PhenotypicData::create(array(
            'ID' => 4,
            'Image_ID' => 4,
            'Height' => 10.1,
            'Tiller_Count' => 33,
            'Greenness' => 3.5,
            'Diameter' => 1,
            'Biomass' => 144,
            ));

        PhenotypicData::create(array(
            'ID' => 5,
            'Image_ID' => 5,
            'Height' => 10.1,
            'Tiller_Count' => 100,
            'Greenness' => 4,
            'Diameter' => 8,
            'Biomass' => 333,
            ));
    }

}