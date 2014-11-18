<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
        $this->call('RestoTableSeeder');
        $this->call('MyEventTableSeeder');
        $this->call('RegistrationTableSeeder');
        $this->call('CommentTableSeeder');
        $this->call('ImageTableSeeder');
	}

}
