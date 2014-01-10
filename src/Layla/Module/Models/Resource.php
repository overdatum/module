<?php namespace Layla\Module\Models;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;

class Resource extends Base {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = array(
		'previous_version_id',
		'module_id',
		'extends',

		'include_package_namespace',

		'name',
		'plural_name',
		'description',

		'controllers_base',
		'resource_controllers_base',
		'models_base',
		'migrations_base',
		'seeds_base',
		'validator_base',

		'controller_namespace',
		'resource_controller_namespace',
		'model_namespace',
		'seed_namespace',
		'validator_namespace',

		'controllers_path',
		'resource_controllers_path',
		'models_path',
		'migrations_path',
		'seeds_path',
		'validators_path',

		'validator',
		'index_validator',
		'store_validator',
		'show_validator',
		'update_validator',

		'rules',
		'index_rules',
		'store_rules',
		'show_rules',
		'update_rules'
	);

	protected $appends = array(
		'controller_destination',
		'resource_controller_destination',
		'model_destination',
	);

	////////////////////////////////////////////////////////////////////
	//////////////////////////// RELATIONS /////////////////////////////
	////////////////////////////////////////////////////////////////////

	/**
	 * Relation with previous version of this resource
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function previous()
	{
		return $this->hasOne('Layla\Module\Models\Resource', 'id', 'previous_version_id');
	}

	/**
	 * Relation with \Layla\Module\Models\Module
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function module()
	{
		return $this->belongsTo('Layla\Module\Models\Module');
	}

	/**
	 * Relation with \Layla\Module\Models\Column
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function columns()
	{
		return $this->hasMany('Layla\Module\Models\Column');
	}

	/**
	 * Relation with \Layla\Module\Models\Form
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function forms()
	{
		return $this->hasMany('Layla\Module\Models\Form');
	}

	/**
	 * Relation with \Layla\Module\Models\Relation
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function relations()
	{
		return $this->hasMany('Layla\Module\Models\Relation');
	}

	////////////////////////////////////////////////////////////////////
	////////////////////////////// SCOPES //////////////////////////////
	////////////////////////////////////////////////////////////////////

	public function scopeForUp($query)
	{
		return $query->with(array(
			'previous',
			'columns' => function($query)
			{
				$query
					->select('columns.*')
					->join('columns as older_columns', 'columns.previous_version_id', '=', 'older_columns.id')
					->where('columns.id', '>', 'older_columns.id');
			},
			'columns.previous',
			'forms.tabs.fields',
			'forms.fields',
			'relations.other',
			'relations.parentResources.relations.other',
		));
	}

	////////////////////////////////////////////////////////////////////
	//////////////////////// PUBLIC INTERFACE //////////////////////////
	////////////////////////////////////////////////////////////////////

	public function getNamespaceFor($type)
	{
		$segments = array(
			$this->module->vendor,
			$this->module->name,
			$this->{$type.'_namespace'}
		);

		return implode('\\', $segments);
	}

	public function getDestinationFor($type, $filename = null)
	{
		$resource = $this;
		$module = $this->module;
		$namespace = null;

		switch($type)
		{
			case 'controller':
				$namespace = $this->controller_namespace;
				break;
			case 'resource_controller':
				$namespace = $this->resource_controller_namespace;
				break;
			case 'model':
				$namespace = $this->model_namespace;
				break;
		}

		$destinationSegments = array(
			base_path(),
			$module->package_path,
			strtolower($module->vendor),
			strtolower($module->name),
			'src'
		);

		if($this->getOriginal($type.'s_path') || is_null($this->getAttribute($type.'_namespace')))
		{
			$destinationSegments[] = $this->{$type.'s_path'};
		}
		else
		{
			if($resource->include_package_namespace)
			{
				$destinationSegments = array_merge($destinationSegments, array(
					$module->vendor,
					$module->name
				));
			}

			$destinationSegments[] = str_replace('\\', '/', $namespace);
		}

		$destinationSegments[] = $filename;

		return implode('/', $destinationSegments);
	}

	////////////////////////////////////////////////////////////////////
	//////////////////////////// ACCESSORS /////////////////////////////
	////////////////////////////////////////////////////////////////////

	/**
	 * Get plural name attribute
	 *
	 * @return string
	 */
	public function getPluralNameAttribute()
	{
		return Str::plural($this->getAttribute('name'));
	}

	/**
	 * Get the destination of the controller
	 *
	 * @return string
	 */
	public function getControllerDestinationAttribute()
	{
		$callback = Config::get('module::module.default.filenames.controller');

		$filename = $callback($this);

		return $this->getDestinationFor('controller', $filename);
	}

	/**
	 * Get the destination of the controller
	 *
	 * @return string
	 */
	public function getResourceControllerDestinationAttribute()
	{
		$callback = Config::get('module::module.default.filenames.resource_controller');

		$filename = $callback($this);

		return $this->getDestinationFor('resource_controller', $filename);
	}

	/**
	 * Get the destination of the model
	 *
	 * @return string
	 */
	public function getModelDestinationAttribute()
	{
		$callback = Config::get('module::module.default.filenames.model');

		$filename = $callback($this);

		return $this->getDestinationFor('model', $filename);
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getControllersBaseAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.base.controllers') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getResourceControllersBaseAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.base.resource_controllers') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getModelsBaseAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.base.models') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getMigrationsBaseAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.base.migrations') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getSeedsBaseAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.base.seeds') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getValidationBaseAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.base.validation') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getControllerNamespaceAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.namespace.controller') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getResourceControllerNamespaceAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.namespace.resource_controller') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getModelNamespaceAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.namespace.model') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getSeedNamespaceAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.namespace.seed') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getValidatorNamespaceAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.namespace.validator') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getControllersPathAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.path.controllers') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getResourceControllersPathAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.path.resource_controllers') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getModelsPathAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.path.models') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getMigrationsPathAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.path.migrations') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getSeedsPathAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.path.seeds') : $value;
	}

	/**
	 * Return default value when empty
	 *
	 * @return string
	 */
	public function getValidatorsPathAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.path.validators') : $value;
	}

	/**
	 * Serialize rules attribute
	 *
	 * @param array $value
	 */
	public function setRulesAttribute($value)
	{
		return json_encode($value);
	}

	/**
	 * Unserialize rules attribute
	 *
	 * @param array $value
	 */
	public function getRulesAttribute($value)
	{
		return json_decode(empty($value) ? '[]' : $value, true);
	}

	/**
	 * Serialize index rules attribute
	 *
	 * @param array $value
	 */
	public function setIndexRulesAttribute($value)
	{
		return json_encode($value);
	}

	/**
	 * Unserialize index rules attribute
	 *
	 * @param array $value
	 */
	public function getIndexRulesAttribute($value)
	{
		return json_decode(empty($value) ? '[]' : $value, true);
	}

	/**
	 * Serialize store rules attribute
	 *
	 * @param array $value
	 */
	public function setStoreRulesAttribute($value)
	{
		return json_encode($value);
	}

	/**
	 * Unserialize store rules attribute
	 *
	 * @param array $value
	 */
	public function getStoreRulesAttribute($value)
	{
		return json_decode(empty($value) ? '[]' : $value, true);
	}

	/**
	 * Serialize show rules attribute
	 *
	 * @param array $value
	 */
	public function setShowRulesAttribute($value)
	{
		return json_encode($value);
	}

	/**
	 * Unserialize show rules attribute
	 *
	 * @param array $value
	 */
	public function getShowRulesAttribute($value)
	{
		return json_decode(empty($value) ? '[]' : $value, true);
	}

	/**
	 * Serialize update rules attribute
	 *
	 * @param array $value
	 */
	public function setUpdateRulesAttribute($value)
	{
		return json_encode($value);
	}

	/**
	 * Unserialize update rules attribute
	 *
	 * @param array $value
	 */
	public function getUpdateRulesAttribute($value)
	{
		return json_decode(empty($value) ? '[]' : $value, true);
	}

	// @deleteme
	public function getIncludePackageNamespaceAttribute($value)
	{
		return true;
	}

}
