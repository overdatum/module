<?php namespace Layla\Module\Blueprints;

class ModelBlueprint extends Blueprint {

	/**
	 * Get the namespace
	 *
	 * @return string
	 */
	public function getNamespace()
	{
		return $this->compileNamespace($this->resource->namespace);
	}

	/**
	 * Get the filleable columns
	 *
	 * @return string
	 */
	public function getFillable()
	{
		$fillableColumns = $this->resource->columns->filter(function($item)
		{
			return $item->fillable;
		});

		$fillable = $fillableColumns
			->fetch('name')
			->all();

		return $this->compileArray($fillable);
	}

	/**
	 * Get the uses
	 *
	 * @return string
	 */
	public function getUses()
	{
		$uses = array();

		if($this->hasBaseModel())
		{
			$uses[] = $this->getBaseModel();
		}

		return $this->compileUses($uses);
	}

	/**
	 * Checks if a base model is defined
	 *
	 * @return string
	 */
	public function hasBaseModel()
	{
		return ! empty($this->resource->models_base);
	}

	/**
	 * Get the base model
	 *
	 * @return string
	 */
	public function getBaseModel()
	{
		return $this->resource->models_base;
	}

	/**
	 * Get the classname of the base model
	 *
	 * @return string
	 */
	public function getBaseModelClass()
	{
		return $this->getLastNamespaceSegment($this->getBaseModel());
	}

	/**
	 * Get the model's name
	 *
	 * @return string
	 */
	public function getModel()
	{
		return $this->resource->name;
	}

	/**
	 * Get the relations of this model
	 *
	 * @return array of strings
	 */
	public function getRelations()
	{
		$relations = $this->resource->relations;

		$results = array();
		foreach($relations as $relation)
		{
			$other = $relation->other;

			$name = $relation->name;
			$otherClass = $other->getNamespaceFor('model').'\\'.$other->name;
			$stub = __DIR__.'/../../../stubs/model/'.strtolower($relation->type).'.stub';
			$data = compact('name', 'otherClass');

			$content = eval_blade($stub, $data);

			$results[] = $this->increaseTabs($content);
		}

		return $results;
	}

	/**
	 * Get file the destination for the model
	 *
	 * @return string
	 */
	public function getDestination()
	{
		$path = $this->resource->models_path;
		$namespace = $this->resource->model_namespace;
		$fileName = $this->resource->name.'.php';

		return $this->compileDestination($path, $namespace, $fileName);
	}

}
