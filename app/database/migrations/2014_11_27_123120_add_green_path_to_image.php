<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGreenPathToImage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('image', function(Blueprint $table)
		{
			$table->string('Processed_Greenness_Path', 255)->after('Processed_Tiller_Path');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('image', function(Blueprint $table)
		{
			$table->dropColumn('Processed_Greenness_Path');
		});
	}

}
