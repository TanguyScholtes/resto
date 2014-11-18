<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('restorallye_events', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('location');
            $table->string('date');
            $table->integer('places-remaining');
            $table->integer('places-total');
            $table->integer('resto1_ID');
            $table->integer('resto2_ID');
            $table->integer('resto3_ID');
            $table->text('description');
            $table->string('done');
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
		Schema::drop('events');
	}

}
