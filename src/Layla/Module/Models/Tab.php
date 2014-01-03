<?php namespace Layla\Module\Models;

class Tab extends Base {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = array(
		'form_id',
		'name',
		'identifier',
		'sort'
	);

	/**
	 * Relation with \Layla\Module\Models\Form
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function form()
	{
		return $this->belongsTo('Layla\Module\Models\Form');
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

}
