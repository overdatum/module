<?php namespace Layla\Module\Models;

class Column extends Base {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = array(
		'resource_id',
		'name',
		'type',
		'size',
		'default',
		'fillable'
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

	////////////////////////////////////////////////////////////////////
	//////////////////////////// ACCESSORS /////////////////////////////
	////////////////////////////////////////////////////////////////////

	// @todo deleteme
	public function getFillableAttribute($value)
	{
		return is_null($value) ? true : $value;
	}

}
