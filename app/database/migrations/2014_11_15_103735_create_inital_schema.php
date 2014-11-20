<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitalSchema extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::dropIfExists('camera');
		Schema::create('camera', function($table){
			$table->increments('ID');
			$table->integer('Current_Left_Plant_ID')->unsigned()->nullable();
			$table->integer('Current_Right_Plant_ID')->unsigned()->nullable();
			$table->engine = 'InnoDB';
		});

		Schema::dropIfExists('camera_appointment');
		Schema::create('camera_appointment', function($table){
			$table->increments('ID');
			$table->dateTime('Date_Taken');
			$table->integer('Camera_ID')->unsigned();
			$table->enum('Interval', array('Once','Daily','Weekly'));
			$table->softDeletes();
			$table->engine = 'InnoDB';
		}); 

		Schema::dropIfExists('image');
		Schema::create('image', function($table){
			$table->increments('ID');
			$table->integer('Plant_ID')->unsigned();
			$table->dateTime('Date_Taken');
			$table->enum('Plant_Stage', array('Tillering','Mid-Tillering','Flowering'));
			$table->enum('Plant_Type', array('IR64','IR64-C','IR64-A009'));
			$table->string('Raw_Path', 255);
			$table->string('Processed_Height_Path', 255);
			$table->string('Processed_Tiller_Path', 255);
			$table->string('Processed_Biomass_Path', 255);
			$table->softDeletes();
			$table->engine = 'InnoDB';
		});

		Schema::dropIfExists('phenotypic_data');
		Schema::create('phenotypic_data', function($table){
			$table->increments('ID');
			$table->integer('Image_ID')->unsigned();
			$table->double('Height');
			$table->integer('Tiller_Count');
			$table->double('Greenness');
			$table->double('Diameter');
			$table->double('Biomass');
			$table->softDeletes();
			$table->engine = 'InnoDB';
		});

		Schema::dropIfExists('plant');
		Schema::create('plant', function($table){
			$table->increments('ID');
			$table->string('Plant_Name', 64);
			$table->dateTime('Date_Placed');
			$table->enum('Plant_Stage', array('Tillering','Mid-Tillering','Flowering'));
			$table->enum('Plant_Type', array('IR64','IR64-C','IR64-A009'));
			$table->string('Comments', 255);
			$table->softDeletes();
			$table->engine = 'InnoDB';
		});

		Schema::dropIfExists('users');
		Schema::create('users', function($table){
			$table->increments('ID');
			$table->string('Username')->unique();
			$table->string('Password', 64);
			$table->string('Name', 64);
			$table->timestamps();
			$table->softDeletes();
			$table->engine = 'InnoDB';
		}); 

		//Set Foreign Keys
		Schema::table('camera', function($table) {
       		$table->foreign('Current_Left_Plant_ID')->references('ID')->on('plant')->onDelete('no action')->onUpdate('no action');
       		$table->foreign('Current_Right_Plant_ID')->references('ID')->on('plant')->onDelete('no action')->onUpdate('no action');
   		});

   		Schema::table('camera_appointment', function($table) {
       		$table->foreign('Camera_ID')->references('ID')->on('camera')->onDelete('no action')->onUpdate('no action');
   		});

   		Schema::table('image', function($table) {
			$table->foreign('Plant_ID')->references('ID')->on('plant')->onDelete('no action')->onUpdate('no action');
   		});

   		Schema::table('phenotypic_data', function($table) {
			$table->foreign('Image_ID')->references('ID')->on('image')->onDelete('no action')->onUpdate('no action');
   		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('camera_appointment');
		Schema::dropIfExists('camera');
		Schema::dropIfExists('phenotypic_data');
		Schema::dropIfExists('image');
		Schema::dropIfExists('plant');
		Schema::dropIfExists('users');
	}

}