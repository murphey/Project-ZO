<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('posts', function($table)
		{
			$table->increments('posts_id');
			$table->string('posts_title', 20);
			$table->text('posts_content');
			$table->string('posts_desc');
			$table->string('posts_slug');
			$table->string('posts_keyw');
			$table->integer('posts_user_id');
			$table->timestamps();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('posts');
	}

}
