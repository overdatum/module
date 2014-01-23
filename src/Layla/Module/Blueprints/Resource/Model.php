<?php namespace Layla\Module\Blueprints\Resource;

use Layla\Module\Blueprints\Language\Klass;
use Layla\Module\Blueprints\Resource\Model\Relations;
use Layla\Module\Blueprints\Resource\Model\Columns;

class Model extends Klass {

	protected $type = "class";

	/**
	 * The model's relations
	 *
	 * @var \Layla\Module\Blueprints\Resource\Model\Relations
	 */
	protected $relations;

	/**
	 * The model's columns
	 *
	 * @var \Layla\Module\Blueprints\Resource\Model\Relations
	 */
	protected $columns;

	/**
	 * Create a new model blueprint instance
	 *
	 * @param string $name The name of the model
	 * @param Relations $relations The relations of the model
	 * @param Column $columns The columns of the model
	 */
	public function __construct($name, Relations $relations = null, Columns $columns = null)
	{
		parent::__construct($name);

		if($relations === null)
		{
			$relations = new Relations;
		}

		if($columns === null)
		{
			$columns = new Columns;
		}

		$this->relations = $relations;
		$this->columns = $columns;
	}

	/**
	 * Create a new model blueprint instance statically
	 *
	 * @param string $name The name of the model
	 * @param Relations $relations The relations of the model
	 * @param Column $columns The columns of the model
	 */
	public static function make($name, Relations $relations = null, Columns $columns = null)
	{
		return new static($name, $relations, $columns);
	}

	public function getRelations()
	{
		return $this->relations;
	}

	/**
	 * Add a relation to the class
	 *
	 * @param \Layla\Module\Blueprints\Resource\Model\Relation $relation The relation to add
	 *
	 * @return self
	 */
	public function addRelation(Relation $relation)
	{
		if(is_string($relation))
		{
			$relation = $this->app['loader']->relation($relation);
		}

		$this->relations->put($relation->name, $relation);

		return $this;
	}

	public function getColumns()
	{
		return $this->columns;
	}

	/**
	 * Add a column to the class
	 *
	 * @param \Layla\Module\Blueprints\Resource\Model\Column $column The column to add
	 */
	public function addColumn(Column $column = null)
	{
		if(is_string($column))
		{
			$column = $this->app['loader']->column($column);
		}

		$this->columns->put($column->name, $column);

		return $this;
	}

	public function getCompiler()
	{
		return $this->getResourceCompiler();
	}

}
