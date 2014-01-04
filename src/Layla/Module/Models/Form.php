<?php namespace Layla\Module\Models;

class Form extends Base {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = array(
		'resource_id',
		'name',
		'identifier'
	);

	////////////////////////////////////////////////////////////////////
	//////////////////////////// RELATIONS /////////////////////////////
	////////////////////////////////////////////////////////////////////

	/**
	 * Relation with \Layla\Module\Models\Resource
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function resource()
	{
		return $this->belongsTo('Layla\Module\Models\Resource');
	}

	/**
	 * Relation with \Layla\Module\Models\Field
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function fields()
	{
		return $this->hasMany('Layla\Module\Models\Field');
	}

	/**
	 * Relation with \Layla\Module\Models\Tab
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function tabs()
	{
		return $this->hasMany('Layla\Module\Models\Tab');
	}

}
