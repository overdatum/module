<?php namespace Layla\Module\Blueprints;

class ResourceControllerBlueprint extends ControllerBlueprint {

	/**
	 * Get the namespace
	 *
	 * @return string
	 */
	public function getNamespace()
	{
		return $this->compileNamespace($this->resource->getNamespaceFor('resource_controller'));
	}

	/**
	 * Checks if the controller has rules
	 *
	 * @return boolean
	 */
	public function hasRules()
	{
		return ! $this->hasValidator() && ! empty($this->resource->rules);
	}

	/**
	 * Get the rules
	 *
	 * @return string
	 */
	public function getRules()
	{
		return $this->compileArray($this->resource->rules);
	}

	/**
	 * Checks if there are rules for the index action
	 *
	 * @return boolean
	 */
	public function hasIndexRules()
	{
		return ! $this->hasIndexValidator() && ! empty($this->resource->index_rules);
	}

	/**
	 * Get the rules for the index action
	 *
	 * @return string
	 */
	public function getIndexRules()
	{
		return $this->compileArray($this->resource->index_rules);
	}

	/**
	 * Checks if there are rules for the store action
	 *
	 * @return boolean
	 */
	public function hasStoreRules()
	{
		return ! $this->hasStoreValidator() && ! empty($this->resource->store_rules);
	}

	/**
	 * Get the rules for the store action
	 *
	 * @return string
	 */
	public function getStoreRules()
	{
		return $this->compileArray($this->resource->store_rules);
	}

	/**
	 * Checks if there are rules for the show action
	 *
	 * @return boolean
	 */
	public function hasShowRules()
	{
		return ! $this->hasShowValidator() && ! empty($this->resource->show_rules);
	}

	/**
	 * Get the rules for the show action
	 *
	 * @return string
	 */
	public function getShowRules()
	{
		return $this->compileArray($this->resource->show_rules);
	}

	/**
	 * Checks if there are rules for the update action
	 *
	 * @return boolean
	 */
	public function hasUpdateRules()
	{
		return ! $this->hasUpdateValidator() && ! empty($this->resource->update_rules);
	}

	/**
	 * Get the rules for the update action
	 *
	 * @return string
	 */
	public function getUpdateRules()
	{
		return $this->compileArray($this->resource->update_rules);
	}

	/**
	 * Checks if there is a custom validator
	 *
	 * @return boolean
	 */
	public function hasValidator()
	{
		return ! empty($this->getValidator());
	}

	/**
	 * Get the custom validator
	 *
	 * @return string
	 */
	public function getValidator()
	{
		return $this->resource->validator;
	}

	/**
	 * Checks if there is a custom validator for the index action
	 *
	 * @return boolean
	 */
	public function hasIndexValidator()
	{
		return ! empty($this->getIndexValidator());
	}

	/**
	 * Get the custom validator for the index action
	 *
	 * @return string
	 */
	public function getIndexValidator()
	{
		return $this->resource->index_validator;
	}

	/**
	 * Get the custom validator's class name for the index action
	 *
	 * @return string
	 */
	public function getIndexValidatorClass()
	{
		return $this->getLastNamespaceSegment($this->getIndexValidator());
	}

	/**
	 * Checks if there is a custom validator for the store action
	 *
	 * @return boolean
	 */
	public function hasStoreValidator()
	{
		return ! empty($this->getStoreValidator());
	}

	/**
	 * Get the custom validator for the store action
	 *
	 * @return string
	 */
	public function getStoreValidator()
	{
		return $this->resource->store_validator;
	}

	/**
	 * Get the custom validator's class name for the store action
	 *
	 * @return string
	 */
	public function getStoreValidatorClass()
	{
		return $this->getLastNamespaceSegment($this->getStoreValidator());
	}

	/**
	 * Checks if there is a custom validator for the show action
	 *
	 * @return boolean
	 */
	public function hasShowValidator()
	{
		return ! empty($this->getShowValidator());
	}

	/**
	 * Get the custom validator for the show action
	 *
	 * @return string
	 */
	public function getShowValidator()
	{
		return $this->resource->show_validator;
	}

	/**
	 * Get the custom validator's class name for the show action
	 *
	 * @return string
	 */
	public function getShowValidatorClass()
	{
		return $this->getLastNamespaceSegment($this->getShowValidator());
	}

	/**
	 * Checks if there is a custom validator for the update action
	 *
	 * @return boolean
	 */
	public function hasUpdateValidator()
	{
		return ! empty($this->getUpdateValidator());
	}

	/**
	 * Get the custom validator for the update action
	 *
	 * @return string
	 */
	public function getUpdateValidator()
	{
		return $this->resource->update_validator;
	}

	/**
	 * Get the custom validator's class name for the update action
	 *
	 * @return string
	 */
	public function getUpdateValidatorClass()
	{
		return $this->getLastNamespaceSegment($this->getUpdateValidator());
	}

	/**
	 * Get the use statements for this class's dependencies
	 *
	 * @return string
	 */
	public function getUses()
	{
		$uses = array();

		$uses[] = $this->getBaseController();

		if( ! $this->hasNamespace())
		{
			return $this->compileUses($uses);
		}

		if($this->hasValidator())
		{
			$uses[] = $this->getValidator();
		}

		if($this->hasIndexValidator())
		{
			$uses[] = $this->getIndexValidator();
		}

		if($this->hasStoreValidator())
		{
			$uses[] = $this->getStoreValidator();
		}

		if($this->hasShowValidator())
		{
			$uses[] = $this->getShowValidator();
		}

		if($this->hasUpdateValidator())
		{
			$uses[] = $this->getUpdateValidator();
		}

		return $this->compileUses($uses);
	}

	/**
	 * Get file the destination for the controller
	 *
	 * @return string
	 */
	public function getDestination()
	{
		return $this->resource->resource_controller_destination;
	}

}
