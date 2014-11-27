<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveTypeAndMoveComments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('image', function(Blueprint $table)
		{
			$table->string('Comments', 255)->after('Plant_Stage');
		});

		Schema::table('plant', function(Blueprint $table)
		{
			$table->dropColumn('Comments');
			$table->dropColumn('Plant_type');
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
			$table->string('Comments', 255)->after('Plant_Stage');
			$table->dropColumn('Comments');
		});

		Schema::table('plant', function(Blueprint $table)
		{
			$table->string('Comments', 255)->after('Plant_Stage');
			$table->enum('Plant_Type', array('IR64','IR64-C','IR64-A009'));
		});
	}
}
