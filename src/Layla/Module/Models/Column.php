<?php namespace Layla\Module\Models;

class Column extends Base {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = array(
		'previous_version_id',
		'resource_id',
		'name',
		'type',
		'size',
		'precision',
		'default',
		'fillable',
	);

	////////////////////////////////////////////////////////////////////
	//////////////////////////// RELATIONS /////////////////////////////
	////////////////////////////////////////////////////////////////////

	/**
	 * Relation with previous column
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function previous()
	{
		return $this->hasOne('Layla\Module\Models\Column', 'previous_version_id', 'id');
	}

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

	/**
	 * Get the size as an integer
	 *
	 * @param  string $value
	 * @return integer
	 */
	public function getSizeAttribute($value)
	{
		return empty($value) ? null : (int) $value;
	}

	/**
	 * Get the precision as an integer
	 *
	 * @param  string $value
	 * @return integer
	 */
	public function getPrecisionAttribute($value)
	{
		return empty($value) ? null : (int) $value;
	}

}
