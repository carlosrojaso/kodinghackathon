<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNameAndLocationToTheUser extends Migration {

	public function up()
	{
		Schema::table('users', function($table) {
			$table->string('name');
			$table->string('country');
			$table->string('state');
			$table->string('city');
		});
	}

	public function down()
	{
		Schema::table('users', function($table) {
			$table->drop_column('name');
			$table->drop_column('country');
			$table->drop_column('state');
			$table->drop_column('city');
		});
	}

}
