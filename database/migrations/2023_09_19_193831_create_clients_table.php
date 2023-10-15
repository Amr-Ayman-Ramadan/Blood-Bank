<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 100);
			$table->string('email', 60);
			$table->string('password', 30);
			$table->string('phone', 25);
			$table->date('d_o_b');
			$table->date('last_donation_date');
			$table->integer('pin_code');
			$table->integer('blood_type_id')->unsigned();
			$table->integer('city_id')->unsigned();
			$table->string('api_token', 60);
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}