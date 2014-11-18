<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistrationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registrations', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_ID');
            
            $table->string('user_name');
            
            $table->string('user_firstname');
            
            $table->string('user_mail');
            
            $table->integer('event_ID');
            
            $table->string('groupname');
            $table->integer('peopleNumber');
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
		Schema::drop('registrations');
	}

}
