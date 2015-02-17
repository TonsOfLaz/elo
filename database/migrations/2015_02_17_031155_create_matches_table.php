<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matches', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('photo1_id');
			$table->foreign('photo1_id')
				->references('id')->on('photos');
	      	$table->unsignedInteger('photo2_id');
			$table->foreign('photo2_id')
				->references('id')->on('photos');
	      	$table->string('photo1_elo');
			$table->string('photo2_elo');
			$table->string('winner');
			$table->string('ip');
			$table->unsignedInteger('user_id');
			$table->foreign('user_id')
				->references('id')->on('users');
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
		Schema::drop('matches');
	}

}
