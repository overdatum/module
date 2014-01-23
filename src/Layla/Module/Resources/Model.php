<?php namespace Layla\Module\Resources;

use Illuminate\Support\Fluent;
use Layla\Module\Blueprints\Resource\Model\Relations;
use Layla\Module\Blueprints\Resource\Model\Columns;
use Layla\Module\Blueprints\Resource\Model as ModelBlueprint;

class Model extends Resource {

	protected $type = "model";

	public function getRelations()
	{
		$relations = $this->relations->getAttributes();

		return Relations::make($relations);
	}

	public function getColumns()
	{
		$columns = $this->columns->getAttributes();

		return Columns::make($columns);
	}

	public function getBlueprint()
	{
		return ModelBlueprint::make($this->name, $this->getRelations(), $this->getColumns())
			->base($this->base);
	}

}
