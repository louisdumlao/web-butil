<?php

class PlantTableSeeder extends Seeder {

    public function run()
    {

        Plant::create(array(
        	'ID' => 1,
        	'Plant_Name' => 'Sample1',
        	'Date_Placed' => '2014-11-20',
        	'Plant_Stage' => 'Tillering',
        	));

        Plant::create(array(
        	'ID' => 2,
        	'Plant_Name' => 'Sample2',
        	'Date_Placed' => '2014-11-21',
        	'Plant_Stage' => 'Mid-Tillering',
        	));

        Plant::create(array(
        	'ID' => 3,
        	'Plant_Name' => 'Sample3',
        	'Date_Placed' => '2014-11-22',
        	'Plant_Stage' => 'Flowering',
        	));
    }

}