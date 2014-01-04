<?php namespace Layla\Module\Models;

use Layla\Module\Blueprints\ControllerBlueprint;
use Layla\Module\Blueprints\ResourceControllerBlueprint;
use Layla\Module\Blueprints\ModelBlueprint;
use Layla\Module\Blueprints\MigrationBlueprint;

use Layla\Module\Generators\ControllerGenerator;
use Layla\Module\Generators\ResourceControllerGenerator;
use Layla\Module\Generators\ModelGenerator;
use Layla\Module\Generators\MigrationGenerator;

class Module extends Base {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = array(
		'vendor',
		'name',
		'package_dir'
	);

	////////////////////////////////////////////////////////////////////
	//////////////////////////// RELATIONS /////////////////////////////
	////////////////////////////////////////////////////////////////////

	/**
	 * Relation with \Layla\Module\Models\Resource
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function resources()
	{
		return $this->hasMany('Layla\Module\Models\Resource');
	}

	////////////////////////////////////////////////////////////////////
	////////////////////////////// SCOPES //////////////////////////////
	////////////////////////////////////////////////////////////////////

	public function scopeForUp($query)
	{
		return $query->with(array(
			'resources.previous',
			'resources.columns.previous',
			'resources.forms.tabs.fields',
			'resources.forms.fields',
			'resources.relations.other',
			'resources.relations.parentResources.relations.other',
		));
	}

	////////////////////////////////////////////////////////////////////
	//////////////////////////// ACCESSORS /////////////////////////////
	////////////////////////////////////////////////////////////////////

	public function getPackagePathAttribute($value)
	{
		return empty($value) ? 'workbench' : $value;
	}

	////////////////////////////////////////////////////////////////////
	//////////////////////// PUBLIC INTERFACE //////////////////////////
	////////////////////////////////////////////////////////////////////

	public function up()
	{
		$modules = Module::forUp()
			->get();

		foreach($modules as $module)
		{
			foreach ($module->resources as $resource)
			{
				$blueprint = new ControllerBlueprint($resource);
				$generator = new ControllerGenerator($blueprint);
				$generator->generate();

				$blueprint = new ResourceControllerBlueprint($resource);
				$generator = new ResourceControllerGenerator($blueprint);
				$generator->generate();

				$blueprint = new ModelBlueprint($resource);
				$generator = new ModelGenerator($blueprint);
				$generator->generate();

				$blueprint = new MigrationBlueprint($resource, true);
				$generator = new MigrationGenerator($blueprint);
				$generator->generate();
			}
		}
	}

}
