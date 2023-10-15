<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('notification_settings_text', 70);
			$table->text('about_app');
			$table->string('phone', 50);
			$table->string('email', 60);
			$table->string('fb_link', 50);
			$table->string('tw_link', 50);
			$table->string('insta_link', 50);
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}