<?php namespace Layla\Module\Generators;

use Layla\Module\Blueprints\ResourceControllerBlueprint;

class ResourceControllerGenerator extends Generator {

	/**
	 * Location of the stub
	 *
	 * @var string
	 */
	protected $stub = 'resource.controller.stub';

	/**
	 * Create a new ResourceControllerGenerator instance
	 *
	 * @param ResourceControllerBlueprint $blueprint
	 */
	public function __construct(ResourceControllerBlueprint $blueprint)
	{
		$this->blueprint = $blueprint;
	}

}
