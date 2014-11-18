<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRestosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('restos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('address-street');
            $table->string('address-number');
            $table->string('address-postalCode');
            $table->string('address-town');
            $table->string('url');
            $table->string('image');
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
		Schema::drop('restos');
	}

}
