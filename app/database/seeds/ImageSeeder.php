<?php

class ImageTableSeeder extends Seeder {

    public function run()
    {
        $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus viverra lacus quis massa convallis pellentesque. Integer malesuada bibendum ornare. Quisque tincidunt rutrum ligula vitae rutrum.';

        DB::table('image')->delete();

        Image::create(array(
            'ID' => 1,
        	'Plant_ID' => 1,
        	'Date_Taken' => '2014-11-20 12:00:00',
        	'Plant_Stage' => 'Tillering',
            'Comments' => $lorem,
            'Raw_Path' => 'assets/images/C41234567890.JPG',
            'Processed_Height_Path' => 'assets/images/C41234567890-Height.JPG',
            'Processed_Tiller_Path' => 'assets/images/C41234567890-TillerCount.JPG',
            'Processed_Biomass_Path' => 'assets/images/C41234567890-Biomass.JPG',
            'Processed_Greenness_Path' => 'assets/images/C41234567890-Greeness.JPG',
        	));

        Image::create(array(
            'ID' => 2,
            'Plant_ID' => 1,
            'Date_Taken' => '2014-11-20 13:00:00',
            'Plant_Stage' => 'Tillering',
            'Comments' => $lorem,
            'Raw_Path' => 'assets/images/C41234567890.JPG',
            'Processed_Height_Path' => 'assets/images/C41234567890-Height.JPG',
            'Processed_Tiller_Path' => 'assets/images/C41234567890-TillerCount.JPG',
            'Processed_Biomass_Path' => 'assets/images/C41234567890-Biomass.JPG',
            'Processed_Greenness_Path' => 'assets/images/C41234567890-Greeness.JPG',
            ));

        Image::create(array(
            'ID' => 3,
            'Plant_ID' => 1,
            'Date_Taken' => '2014-11-21 12:00:00',
            'Plant_Stage' => 'Mid-Tillering',
            'Comments' => $lorem,
            'Raw_Path' => 'assets/images/C41234567890.JPG',
            'Processed_Height_Path' => 'assets/images/C41234567890-Height.JPG',
            'Processed_Tiller_Path' => 'assets/images/C41234567890-TillerCount.JPG',
            'Processed_Biomass_Path' => 'assets/images/C41234567890-Biomass.JPG',
            'Processed_Greenness_Path' => 'assets/images/C41234567890-Greeness.JPG',
            ));

        Image::create(array(
            'ID' => 4,
            'Plant_ID' => 2,
            'Date_Taken' => '2014-11-20 12:00:00',
            'Plant_Stage' => 'Mid-Tillering',
            'Comments' => $lorem,
            'Raw_Path' => 'assets/images/C41234567890.JPG',
            'Processed_Height_Path' => 'assets/images/C41234567890-Height.JPG',
            'Processed_Tiller_Path' => 'assets/images/C41234567890-TillerCount.JPG',
            'Processed_Biomass_Path' => 'assets/images/C41234567890-Biomass.JPG',
            'Processed_Greenness_Path' => 'assets/images/C41234567890-Greeness.JPG',
            ));

        Image::create(array(
            'ID' => 5,
            'Plant_ID' => 2,
            'Date_Taken' => '2014-12-23 12:00:00',
            'Plant_Stage' => 'Flowering',
            'Comments' => $lorem,
            'Raw_Path' => 'assets/images/C41234567890.JPG',
            'Processed_Height_Path' => 'assets/images/C41234567890-Height.JPG',
            'Processed_Tiller_Path' => 'assets/images/C41234567890-TillerCount.JPG',
            'Processed_Biomass_Path' => 'assets/images/C41234567890-Biomass.JPG',
            'Processed_Greenness_Path' => 'assets/images/C41234567890-Greeness.JPG',
            ));
    }

}