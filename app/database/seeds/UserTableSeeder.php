<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('restorallye_users')->delete();

		User::create([
				'name'	             => 'Anonyme',
                'firstname'	         => 'Utilisateur',
                'company'            => '',
                'address-street'     => 'Rue des gourmands',
                'address-number'     => '1',
                'address-postalCode' => '0001',
                'address-town'       => 'RestoLand',
                'phone'              => '04 000 00 00',
                'fax'                => '',
				'email'		         => 'anonyme@restorallye.com',
				'password'	         => Hash::make('azerty'),
                'newsletter'         => 'false'
			]);

		User::create([
				'name'	             => 'Administrateur',
                'firstname'	         => 'Admin',
                'company'            => 'RestoRallye ASBL',
                'address-street'     => 'Rue des gourmands',
                'address-number'     => '1',
                'address-postalCode' => '0001',
                'address-town'       => 'RestoLand',
                'phone'              => '0471 38 06 38',
                'fax'                => '',
				'email'		         => 'info@restorallye.com',
				'password'	         => Hash::make('admin'),
                'newsletter'         => 'false'
			]);
	}
}