<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticaleClientTable extends Migration {

	public function up()
	{
		Schema::create('articale_client', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('client_id')->unsigned();
			$table->integer('articale_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('articale_client');
	}
}