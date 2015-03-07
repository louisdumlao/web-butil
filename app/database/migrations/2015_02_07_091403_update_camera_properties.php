<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCameraProperties extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('camera', function(Blueprint $table)
		{
			$table->string('IP_Address', 255);
			$table->string('Username', 255);
			$table->string('Password', 255);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('camera', function(Blueprint $table)
		{
			$table->dropColumn('IP_Address');
			$table->dropColumn('Username');
			$table->dropColumn('Password');
		});
	}

}
