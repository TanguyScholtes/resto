<?php

class CommentTableSeeder extends Seeder {

	public function run()
	{
		DB::table('restorallye_comments')->delete();

		Comment::create([
				'commentary'	         => 'Bonjour, je suis Anonyme. We are Anonymous. We are legion. We do not forgive. We do not forget. Expect us.',
                'user_ID'	             => User::whereEmail('anonyme@restorallye.com')->first()->id,
                'event_ID'               => '1'
			]);
        
        Comment::create([
				'commentary'	         => 'Reported.',
                'user_ID'	             => User::whereEmail('info@restorallye.com')->first()->id,
                'event_ID'               => '1'
			]);
        
        Comment::create([
				'commentary'	         => 'Maieuh...',
                'user_ID'	             => User::whereEmail('anonyme@restorallye.com')->first()->id,
                'event_ID'               => '1'
			]);
	}
}