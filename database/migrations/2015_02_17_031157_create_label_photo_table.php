<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabelPhotoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('label_photo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('label_id');
			$table->foreign('label_id')
				->references('id')->on('labels');
	      	$table->unsignedInteger('photo_id');
			$table->foreign('photo_id')
				->references('id')->on('photos');
	      	$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('label_photo');
	}

}
