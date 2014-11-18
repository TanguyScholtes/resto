<?php

class ImageTableSeeder extends Seeder {

	public function run()
	{
		DB::table('restorallye_images')->delete();

		Image::create([
                'slug'	         => 'img/image01.jpg',
                'event_ID'           => '1'
			]);
        Image::create([
                'slug'	         => 'img/image02.jpg',
                'event_ID'           => '1'
			]);
        Image::create([
                'slug'	         => 'img/image03.jpg',
                'event_ID'           => '1'
			]);
	}
}