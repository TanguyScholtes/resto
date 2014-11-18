<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('firstname');
            $table->string('company');
            $table->string('address-street');
            $table->string('address-number');
            $table->string('address-postalCode');
            $table->string('address-town');
            $table->string('phone');
            $table->string('fax');
			$table->string('email')->unique();
			$table->string('password', 60);
            $table->boolean('newsletter');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
