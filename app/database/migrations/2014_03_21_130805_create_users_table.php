<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*Schema::create('users', function($table)
		{	
			$table->increments('id');
			$table->string('email', 100)->unique();

			$table->timestamps();


		});*/
		Schema::table('users', function($table)
{
			$table->string('admin_name', 20);
			$table->string('last_name', 20);
			$table->string('first_name', 20);
			$table->integer('user_level', 1);
});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		schema::drop('users');
	}

}
