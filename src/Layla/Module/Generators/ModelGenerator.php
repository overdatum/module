<?php namespace Layla\Module\Generators;

use Layla\Module\Blueprints\ModelBlueprint;

class ModelGenerator extends Generator {

	/**
	 * Location of the stub
	 *
	 * @var string
	 */
	protected $stub = 'model.stub';

	/**
	 * Create a new ModelGenerator instance
	 *
	 * @param ModelBlueprint $blueprint
	 */
	public function __construct(ModelBlueprint $blueprint)
	{
		$this->blueprint = $blueprint;
	}

}
