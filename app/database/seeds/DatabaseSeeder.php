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
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		$this->call('SentryGroupSeeder');
		$this->call('SentryUserSeeder');
		$this->call('SentryUserGroupSeeder');		
		$this->call('RelUsersCategoryTableSeeder');
		$this->call('RelUsersInterestsTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('InterestsCategoriesTableSeeder');
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}