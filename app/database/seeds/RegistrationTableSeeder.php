<?php

class RegistrationTableSeeder extends Seeder {

	public function run()
	{
		DB::table('registrations')->delete();

		Registration::create([
				'user_ID'	         => User::whereEmail('anonyme@restorallye.com')->first()->id,
                'user_name'	         => User::whereEmail('anonyme@restorallye.com')->first()->name,
                'user_firstname'     => User::whereEmail('anonyme@restorallye.com')->first()->firstname,
                'user_mail'          => 'anonyme@restorallye.com',
                'event_ID'           => '1',
                'groupname'          => 'Anonymous',
                'peopleNumber'       => '42'
			]);
        
        Registration::create([
				'user_ID'	         => User::whereEmail('info@restorallye.com')->first()->id,
                'user_name'	         => User::whereEmail('info@restorallye.com')->first()->name,
                'user_firstname'     => User::whereEmail('info@restorallye.com')->first()->firstname,
                'user_mail'          => 'info@restorallye.com',
                'event_ID'           => '1',
                'groupname'          => 'AdminBook',
                'peopleNumber'       => '1'
			]);
	}
}