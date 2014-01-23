<?php namespace Layla\Module\Compilers\Resources\Laravel;

use Layla\Module\Compilers\Languages\Php\ClassCompiler;
use Layla\Module\Blueprints\Resource\Model;
use Layla\Module\Blueprints\Language\Property;
use Layla\Module\Blueprints\Language\Method;
use Layla\Module\Facades\TemplateLoader;
use Layla\Module\Facades\Module;
use Layla\Module\Types\DataType;

class ModelCompiler extends ClassCompiler {

	/**
	 * The blueprint to compile
	 *
	 * @var \Layla\Module\Blueprints\Resource\Model
	 */
	protected $blueprint;

	/**
	 * Create a new ModelCompiler instance
	 *
	 * @param string $blueprint The blueprint to compile
	 */
	public function __construct(Model $blueprint)
	{
		$this->blueprint = $blueprint;

		$this->loadProperties();
		$this->loadMethods();
	}

	public function loadProperties()
	{
		$fillable = array();
		foreach($this->blueprint->getColumns() as $column)
		{
			$fillable[] = $column->name;
		}

		$property = Property::make('fillable')
			->type(DataType::ARR)
			->value($fillable)
			->visibility('protected')
			->comment('The attributes that are mass assignable.');

		$this->blueprint->addProperty($property);
	}

	public function loadMethods()
	{
		$relations = array();
		foreach($this->blueprint->getRelations() as $relation)
		{
			$namespaceCompiler = $this->getNamespaceCompilerFor($relation->other);

			$body = Module::templateLoader(__DIR__)
				->body($relation->type, $this->getRelationData($relation));

			$method = Method::make($relation->name, null, $relation->other)
				->comment('Relation with '.$namespaceCompiler->getClass())
				->body($body);

			$this->blueprint->addMethod($method);
		}
	}

	protected function getRelationData($relation)
	{
		$namespaceCompiler = $this->getNamespaceCompilerFor($relation->other);

		return array(
			'related' => $namespaceCompiler->getName(),
			'foreignKey' => strtolower($namespaceCompiler->getClass()).'_id',
			'localKey' => 'id'
		);
	}

}
