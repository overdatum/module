<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resources', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('module_id');
			$table->string('extends');
			$table->string('name');
			$table->string('plural_name');
			$table->string('description');
			$table->string('controller_namespace');
			$table->string('model_namespace');
			$table->string('seed_namespace');
			$table->string('validator_namespace');
			$table->string('controllers_path');
			$table->string('models_path');
			$table->string('migrations_path');
			$table->string('seeds_path');
			$table->string('validator_path');
			$table->string('validator');
			$table->string('index_validator');
			$table->string('store_validator');
			$table->string('show_validator');
			$table->string('update_validator');
			$table->text('rules');
			$table->text('index_rules');
			$table->text('store_rules');
			$table->text('show_rules');
			$table->text('update_rules');
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
		Schema::drop('resources');
	}

}
