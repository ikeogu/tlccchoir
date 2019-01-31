<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// blog table
		Schema::create('posts', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table ->integer('user_id')->unsigned();
			$table->string('title')->unique();
			$table->string('name');
			$table->text('body');
			$table->string('slug')->unique();
			$table->boolean('active');
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
		// drop blog table
	
	}

}
