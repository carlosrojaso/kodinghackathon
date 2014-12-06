<?php
// app/database/seeds/CommentTableSeeder.php

class RelUsersCategoryTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('rel_users_category')->delete();

		RelUsersCategory::create(array(
			'user_id' => '1',
			'category_id' => '4'
		));
	}

}