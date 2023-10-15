<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticalesTable extends Migration {

	public function up()
	{
		Schema::create('articales', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 30);
			$table->string('image', 70);
			$table->text('content');
			$table->integer('category_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('articales');
	}
}