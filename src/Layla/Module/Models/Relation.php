<?php namespace Layla\Module\Models;

class Relation extends Base {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = array(
		'resource_id',
		'other_resource_id',
		'type',
	);

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
	 * Relation with \Layla\Module\Models\Resource
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function otherResource()
	{
		return $this->hasOne('Layla\Module\Models\Resource', 'other_resource_id');
	}

}
