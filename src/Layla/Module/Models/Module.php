<?php namespace Layla\Module\Models;

class Module extends Base {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = array(
		'vendor',
		'name'
	);

	/**
	 * Relation with \Layla\Module\Models\Resource
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function resources()
	{
		return $this->hasMany('Layla\Module\Models\Resource');
	}

}
