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
			$table->integer('form_id')->nullable();
			$table->integer('tab_id')->nullable();
			$table->string('type');
			$table->string('placeholder')->nullable();
			$table->string('data_key');
			$table->text('meta')->nullable();
			$table->boolean('autocomplete')->nullable();
			$table->boolean('multiple')->nullable();
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
