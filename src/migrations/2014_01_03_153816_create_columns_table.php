<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('columns', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('previous_version_id')->nullable();
			$table->integer('resource_id');
			$table->string('name')->nullable();
			$table->string('type');
			$table->integer('size')->nullable();
			$table->integer('precision')->nullable();
			$table->string('default')->nullable();
			$table->boolean('fillable');
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
		Schema::drop('columns');
	}

}
