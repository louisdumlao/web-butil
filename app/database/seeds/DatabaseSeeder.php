<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('phenotypic_data')->delete();
		DB::table('image')->delete();
		DB::table('plant')->delete();

		$this->call('PlantTableSeeder');
		$this->call('ImageTableSeeder');
		$this->call('PhenotypicDataTableSeeder');
	}

}

