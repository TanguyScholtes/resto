<?php

class MyEventTableSeeder extends Seeder {

	public function run()
	{
		DB::table('restorallye_events')->delete();

		MyEvent::create([
				'location'	         => 'Liège',
                'date'	             => '2014-11-18',
                'places-remaining'   => '7',
                'places-total'       => '50',
                'resto1_ID'          => '1',
                'resto2_ID'          => '2',
                'resto3_ID'          => '4',
                'done'               => 'false',
                'description'        => 'La Cité Ardente accueillera à nouveau un RestoRallye ce 31 octobre à l\'occasion d\'Halloween ! La soirée débutera dans rien de moins que l\'Archéoforum de Liège, spécialement décoré pour l\'occasion. Si cette expérience gastronomique d\'un autre monde ne vous fait pas peur, vous pouvez d\'hors et déjà vous inscrire pour cette soirée qui s\'annonce effroyablement délicieuse !'
			]);
	}
}