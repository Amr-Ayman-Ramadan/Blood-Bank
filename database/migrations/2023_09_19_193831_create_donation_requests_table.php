<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDonationRequestsTable extends Migration {

	public function up()
	{
		Schema::create('donation_requests', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('patient_name', 30);
			$table->string('patient_phone', 60);
			$table->integer('city_id')->unsigned();
			$table->string('hospital_name', 50);
			$table->string('hospital_address', 100);
			$table->integer('blood_type_id')->unsigned();
			$table->integer('age');
			$table->integer('bags_number');
			$table->text('details');
			$table->decimal('latitude', 10,8);
			$table->decimal('longitude', 10,8);
			$table->integer('client_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('donation_requests');
	}
}