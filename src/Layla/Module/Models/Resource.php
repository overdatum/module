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
		'module_id',
		'extends',

		'name',
		'plural_name',
		'description',

		'controller_namespace',
		'model_namespace',
		'seed_namespace',
		'validator_namespace',

		'controllers_path',
		'models_path',
		'migrations_path',
		'seeds_path',
		'validator_path',

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

	////////////////////////////////////////////////////////////////////
	//////////////////////////// RELATIONS /////////////////////////////
	////////////////////////////////////////////////////////////////////

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
	public function getResource_controllerPathAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.path.resource_controller') : $value;
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
	public function getValidatorPathAttribute($value)
	{
		return empty($value) ? Config::get('module::module.default.path.validator') : $value;
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
		return json_decode(empty($value) ? '[]' : $value);
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
		return json_decode(empty($value) ? '[]' : $value);
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
		return json_decode(empty($value) ? '[]' : $value);
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
		return json_decode(empty($value) ? '[]' : $value);
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
		return json_decode(empty($value) ? '[]' : $value);
	}

}
