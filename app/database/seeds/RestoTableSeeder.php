<?php

class RestoTableSeeder extends Seeder {

	public function run()
	{
		DB::table('restos')->delete();

		Resto::create([
				'name'	             => 'Quick',
                'address-street'	 => 'Rue Cockerill',
                'address-number'     => '30',
                'address-postalCode' => '4100',
                'address-town'       => 'Seraing',
                'url'                => 'http://www.quick.be/',
                'image'              => 'img/quick.png'
			]);
        
        Resto::create([
				'name'	             => 'McDonald',
                'address-street'	 => 'Rue Renkin Sualem',
                'address-number'     => '0',
                'address-postalCode' => '4101',
                'address-town'       => 'Jemeppe',
                'url'                => 'http://mcdonalds.be/fr',
                'image'              => 'img/mcdonalds.png'
			]);
        
        Resto::create([
				'name'	             => 'Cafeteria du Parc des Marais',
                'address-street'	 => 'Parc des Marais',
                'address-number'     => '0',
                'address-postalCode' => '4100',
                'address-town'       => 'Seraing',
                'url'                => '',
                'image'              => 'img/cafeteria.png'
			]);
        
        Resto::create([
				'name'	             => 'Le France 2',
                'address-street'	 => 'Rue Nihar',
                'address-number'     => '47',
                'address-postalCode' => '4101',
                'address-town'       => 'Jemeppe',
                'url'                => 'http://lefrance2restaurantljemeppe.be/fr',
                'image'              => 'img/france2.png'
			]);
	}
}