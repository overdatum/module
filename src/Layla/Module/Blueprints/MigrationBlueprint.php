<?php namespace Layla\Module\Blueprints;

use Layla\Module\Models\Resource;
use Layla\Module\Models\Column;

class MigrationBlueprint extends Blueprint {

	/**
	 * Create a new MigrationBlueprint instance
	 *
	 * @param Resource $resource
	 * @param boolean $isDirty do we need to upgrade the schema?
	 */
	public function __construct(Resource $resource, $isDirty = false)
	{
		parent::__construct($resource);

		$this->isDirty = $isDirty;

		$this->setupActions();
	}

	/**
	 * Get the namespace
	 *
	 * @return string
	 */
	public function getNamespace()
	{
		return '';
	}

	/**
	 * Get the uses
	 *
	 * @return string
	 */
	public function getUses()
	{
		$uses = array('Illuminate\Database\Schema\Blueprint');

		if($this->hasBaseMigration())
		{
			$uses[] = $this->getBaseMigration();
		}

		return $this->compileUses($uses);
	}

	/**
	 * Checks if a base model is defined
	 *
	 * @return string
	 */
	public function hasBaseMigration()
	{
		return ! empty($this->resource->migrations_base);
	}

	/**
	 * Get the base model
	 *
	 * @return string
	 */
	public function getBaseMigration()
	{
		return $this->resource->migrations_base;
	}

	/**
	 * Get the classname of the base model
	 *
	 * @return string
	 */
	public function getBaseMigrationClass()
	{
		return $this->getLastNamespaceSegment($this->getBaseMigration());
	}

	/**
	 * Get the table name for a resource
	 *
	 * @param  \Layla\Module\Models\Resource $resource
	 * @return string
	 */
	public function getTableForResource($resource)
	{
		return strtolower($resource->name);
	}

	/**
	 * Get the plural table name for a resource
	 *
	 * @param  \Layla\Module\Models\Resource $resource
	 * @return string
	 */
	public function getPluralTableForResource($resource)
	{
		return strtolower($resource->plural_name);
	}

	/**
	 * Get the model's name
	 *
	 * @return string
	 */
	public function getMigration()
	{
		$class = ucfirst($this->getPluralTableForResource($this->resource));

		return ucfirst($this->action).$class.'Table';
	}

	public function getActionName()
	{
		$class = strtolower($this->resource->plural_name);

		return $this->action.'_'.$class.'_table';
	}

	/**
	 * Get the actions for the up method
	 *
	 * @return array of strings
	 */
	public function getUpActions()
	{
		return $this->actions['up'];
	}

	/**
	 * Get the actions for the down method
	 *
	 * @return array of strings
	 */
	public function getDownActions()
	{
		return $this->actions['down'];
	}

	/**
	 * Get the file name to the migration.
	 *
	 * @param  string  $name
	 * @param  string  $path
	 *
	 * @return string
	 */
	protected function getFileName($name)
	{
		return $this->getDatePrefix().'_'.$name.'.php';
	}

	/**
	 * Get the date prefix for the migration.
	 *
	 * @return string
	 */
	protected function getDatePrefix()
	{
		return date('Y_m_d_His');
	}

	/**
	 * Get file the destination for the model
	 *
	 * @return string
	 */
	public function getDestination()
	{
		$path = $this->resource->migrations_path;
		$fileName = $this->getFileName($this->getActionName());

		return $this->compileDestination($path, null, $fileName);
	}

	protected function compileColumn($column)
	{
		$arguments = array();

		if( ! is_null($column->name))
		{
			$arguments[] = "'".$column->name."'";
		}

		if( ! is_null($column->size))
		{
			$arguments[] = $column->size;
		}

		if( ! is_null($column->precision))
		{
			$arguments[] = $column->precision;
		}

		return '$table->'.$column->type.'('.implode(', ', $arguments).')'.
			(empty($column->default) ? '' : "->default('".$column->default."')").";\n";
	}

	protected function compileDropColumn($column)
	{
		return "\$table->dropColumn('".$column->name."');\n";
	}

	public function getPreviousIdOfColumnByResource($resource, $name)
	{
		$previousVersionId = null;
		if( ! is_null($resource) || is_null($resource->previous))
		{
			$columns = $this->getRelationColumnsForResource($resource->previous);
			if(array_key_exists($name, $columns))
			{
				$previousVersionId = $columns[$name]->id;
			}
		}

		return $previousVersionId;
	}

	public function getRelationColumnsForResource($resource)
	{
		$columns = array();

		if(is_null($resource) || is_null($resource->relations))
		{
			return $columns;
		}

		foreach($resource->relations as $relation)
		{
			switch($relation->type)
			{
				case 'belongsto':
					$name = strtolower($relation->other->name).'_id';
					$previousVersionId = $this->getPreviousIdOfColumnByResource($resource, $name);
					$columns[$name] = new Column(array(
						'relationtype' => $relation->type,
						'previous_version_id' => $previousVersionId,
						'name' => $name,
						'type' => 'integer',
						'size' => null,
						'default' => null
					));
					break;

				case 'morphto':
					$name = strtolower($relation->name);
					$previousVersionId = $this->getPreviousIdOfColumnByResource($resource, $name);
					$columns[$name] = new Column(array(
						'relationtype' => $relation->type,
						'previous_version_id' => $previousVersionId,
						'name' => $name,
						'type' => 'morphs',
						'size' => null,
						'default' => null
					));
					break;
			}
		}

		if( ! is_null($resource->parentResources))
		{
			// lets get the resources that are linking to us
			foreach($resource->parentResources as $parentResource)
			{
				// and loop over their relations
				foreach($parentResource->relations as $relation)
				{
					// and filter out relations that don't link to us
					if($relation->other->id !== $resource->id) continue;

					switch($relation->type)
					{
						case 'hasone':
							$name = strtolower($relation->name).'_id';
							$previousVersionId = $this->getPreviousIdOfColumnByResource($relation->other, $name);
							$columns[$name] = new Column(array(
								'relationtype' => $relation->type,
								'previous_version_id' => $previousVersionId,
								'name' => $name,
								'type' => 'integer',
								'size' => null,
								'default' => null
							));
							break;
						case 'hasmany':
							$name = strtolower($relation->name).'_id';
							$previousVersionId = $this->getPreviousIdOfColumnByResource($relation->other, $name);
							$columns[$name] = new Column(array(
								'relationtype' => $relation->type,
								'previous_version_id' => $previousVersionId,
								'name' => $name,
								'type' => 'integer',
								'size' => null,
								'default' => null
							));
							break;
					}
				}
			}
		}

		return $columns;
	}

	public function getColumnsForResource($resource)
	{
		$previousVersionId = $this->getPreviousIdOfColumnByResource($resource, 'id');

		$columns = array(
			'id' => new Column(array(
				'previous_version_id' => $previousVersionId,
				'name' => 'id',
				'type' => 'increments',
				'size' => null,
				'default' => null
			))
		);

		$columns = array_merge($columns, $this->getRelationColumnsForResource($resource));

		foreach($resource->columns as $column)
		{
			$columns[$column->name] = $column;
		}

		return $columns;
	}

	public function compileColumns($columns)
	{
		$compiled = array();
		foreach($columns as $column)
		{
			$compiled[] = $this->compileColumn($column);
		}

		return $compiled;
	}

	public function compileDropColumns($columns)
	{
		$compiled = array();
		foreach($columns as $column)
		{
			if(is_null($column->name)) continue;

			$compiled[] = $this->compileDropColumn($column);
		}

		return $compiled;
	}

	public function compileRenameColumnAction($oldColumn, $newColumn)
	{
		return "\$table->renameColumn('".$oldColumn."', '".$newColumn."');\n";
	}

	/**
	 * Create the create table action
	 *
	 * @return string
	 */
	protected function compileCreateTableAction($resource, $columns = array())
	{
		$table = $this->getPluralTableForResource($resource);

		$stub = layla_module_stubs_path().'migration/create.stub';
		$data = compact('table', 'columns');

		return $this->increaseTabs(eval_blade($stub, $data), 2);
	}

	/**
	 * Create the create table action
	 *
	 * @return string
	 */
	protected function compileAlterTableAction($resource, $columns = array())
	{
		$table = $this->getPluralTableForResource($resource);

		$stub = layla_module_stubs_path().'migration/alter.stub';
		$data = compact('table', 'columns');

		return $this->increaseTabs(eval_blade($stub, $data), 2);
	}

	/**
	 * Create the drop table action
	 *
	 * @return string
	 */
	protected function compileDropTableAction($resource)
	{
		$table = $this->getPluralTableForResource($resource);

		$stub = layla_module_stubs_path().'migration/drop.stub';
		$data = compact('table');

		return eval_blade($stub, $data);
	}

	/**
	 * Setup the actions to run in the migration
	 *
	 * Wicked, wicked, the jungle is massive, so is this method
	 * at this moment ;)
	 *
	 * @return void
	 */
	protected function setupActions()
	{
		// check if we need to migrate to another resource, or create a new one
		if( ! $this->isDirty)
		{
			$this->action = 'create';

			$columns = $this->compileColumns($this->getColumnsForResource($this->resource));

			$columns = $this->compileCreateTableAction($this->resource, $columns);
			$this->actions['up'][] = $this->compileAlterTableAction($newResource, $columns);

			$columns = $this->compileDropTableAction($this->resource);
			$this->actions['down'][] = $this->compileAlterTableAction($newResource, $columns);
		}
		else
		{
			$this->action = 'alter';

			$newResource = $this->resource;
			$oldResource = $newResource->previous;

			$upColumns = array();
			$downColumns = array();

			// check if the table was renamed
			$oldTable = $this->getTableForResource($oldResource);
			$newTable = $this->getTableForResource($newResource);
			if($oldTable !== $newTable)
			{
				$upColumns = array_merge($upColumns, $this->compileRenameAction($oldTable, $newTable));
				$downColumns = array_merge($downColumns, $this->compileRenameAction($newTable, $oldTable));
			}

			// check if columns were modified
			$oldColumns = $this->getColumnsForResource($oldResource);
			$newColumns = $this->getColumnsForResource($newResource);
			foreach($newColumns as $newColumn)
			{
				$oldColumn = $newColumn->previous;

				// check if the column is new
				if(is_null($oldColumn))
				{
					// the column is brand new

					// let's add it
					$upColumns = array_merge($upColumns, $this->compileColumns(array($newColumn)));

					// and remove it when rolling back
					$downColumns = array_merge($downColumns, $this->compileDropColumns(array($newColumn)));
				}
				else
				{
					// the column still exists, so we check if something has changed

					// check if the column was renamed
					if($newColumn->name !== $oldColumn->name)
					{
						$columns = array($this->compileRenameColumnAction($oldColumn->name, $newColumn->name));
						$upColumns = array_merge($upColumns, $columns);

						$columns = array($this->compileRenameColumnAction($newColumn->name, $oldColumn->name));
						$downColumns = array_merge($downColumns, $columns);
					}

					// check if something else has changed
					if(
						$oldColumn->type !== $newColumn->type ||
						$oldColumn->size !== $newColumn->size ||
						$oldColumn->default !== $newColumn->default
					)
					{
						$columns = $this->compileColumns(array($newColumn));
						$upColumns = array_merge($upColumns, $columns);

						$columns = $this->compileColumns(array($newColumn));
						$downColumns = array_merge($downColumns, $columns);
					}
				}
			}

			// now let's see if columns are gone, so we can remove them
			//
			// i really hope you guys have read the docs before
			// really not knowingly removing your data and landing here =|
			foreach($oldColumns as $oldColumn)
			{
				$newColumn = $oldColumn->next;
				if(is_null($newColumn))
				{
					// bye bye
					$columns = $this->compileDropColumns(array($oldColumn));
					$upColumns = array_merge($upColumns, $columns);

					$columns = $this->compileColumns(array($oldColumn));
					$downColumns = array_merge($downColumns, $columns);
				}
			}

			$this->actions['up'][] = $this->compileAlterTableAction($newResource, $upColumns);
			$this->actions['down'][] = $this->compileAlterTableAction($newResource, $downColumns);
		}
	}

}
