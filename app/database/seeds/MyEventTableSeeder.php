<?php

class MyEventTableSeeder extends Seeder {

	public function run()
	{
		DB::table('events')->delete();

		MyEvent::create([
				'location'	         => 'Liège',
                'date'	             => '2014-11-18',
                'places-remaining'   => '7',
                'places-total'       => '50',
                'resto1_ID'          => '1',
                'resto2_ID'          => '2',
                'resto3_ID'          => '4',
                'done'               => 'false'
			]);
	}
}