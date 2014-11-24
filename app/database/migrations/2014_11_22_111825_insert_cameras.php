<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertCameras extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('camera')->insert(
	        array(
	            'ID' => 1,
	        )
    	);

    	DB::table('camera')->insert(
	        array(
	            'ID' => 2,
	        )
    	);

    	DB::table('camera')->insert(
	        array(
	            'ID' => 3,
	        )
    	);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('camera')->delete();
	}

}
