<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fields', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('column_id');
			$table->integer('form_id');
			$table->integer('tab_id');
			$table->string('type');
			$table->string('placeholder');
			$table->string('data_key');
			$table->text('meta');
			$table->boolean('autocomplete');
			$table->boolean('multiple');
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
		Schema::drop('fields');
	}

}
