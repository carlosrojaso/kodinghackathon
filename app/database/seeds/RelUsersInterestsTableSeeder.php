<?php
// app/database/seeds/CommentTableSeeder.php

class RelUsersInterestsTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('rel_users_interests')->delete();

		RelUsersInterests::create(array(
			'user_id' => '1',
			'interests_categories_idinterests' => '4'
		));

		RelUsersInterests::create(array(
			'user_id' => '1',
			'interests_categories_idinterests' => '2'
		));
	}

}