<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('file');
			$table->string('file_medium')->nullable();
			$table->string('file_small')->nullable();
			$table->unsignedInteger('height')->nullable();
			$table->unsignedInteger('width')->nullable();
			$table->string('date');
			$table->unsignedInteger('elo')->nullable();
			$table->unsignedInteger('album_id');
			$table->foreign('album_id')
				->references('id')->on('albums');
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
		Schema::drop('photos');
	}

}
