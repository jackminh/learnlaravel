<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsPost extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts',function(Blueprint $table){
			$table->increments('id');
			$table->unsignedInteger('user_id');
			$table->string('title');
			$table->string('read_more');
			$table->text('comment');
			$table->unsignedInteger('comment_count');
			$table->timestamps();
		});
		Schema::create('comments',function(Blueprint $table){
			$table->increments('id');
			$table->unsignedInteger('post_id');
			$table->string('commenter');
			$table->string('email');
			$table->text('comment');
			$table->boolean('approved');
			$table->timestamps();
		});
		Schema::create('users',function(Blueprint $table){
			$table->create();
			$table->increments('id');
			$table->string('username');
			$table->string('password');
			$table->string('email');
			$table->string('remember_token',100)->nullable();
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
		Schema::drop('posts');
		Schema::drop('comments');
		Schema::drop('users');
	}

}
