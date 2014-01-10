<?php namespace Layla\Module\Blueprints;

class ControllerBlueprint extends Blueprint {

	/**
	 * Get the namespace
	 *
	 * @return string
	 */
	public function getNamespace()
	{
		return $this->compileNamespace($this->resource->getNamespaceFor('controller'));
	}

	/**
	 * Checks if a base controller is defined
	 *
	 * @return string
	 */
	public function hasBaseController()
	{
		return ! empty($this->resource->controllers_base);
	}

	/**
	 * Get the base controller
	 *
	 * @return string
	 */
	public function getBaseController()
	{
		return $this->resource->controllers_base;
	}

	/**
	 * Get the classname of the base controller
	 *
	 * @return string
	 */
	public function getBaseControllerClass()
	{
		return $this->getLastNamespaceSegment($this->getBaseController());
	}

	/**
	 * Get the name of the controller
	 *
	 * @return string
	 */
	public function getController()
	{
		return $this->resource->plural_name.'Controller';
	}

	/**
	 * Get file the destination for the controller
	 *
	 * @return string
	 */
	public function getDestination()
	{
		return $this->resource->controller_destination;
	}

}
