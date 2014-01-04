<?php namespace Layla\Module\Models;

class Field extends Base {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = array(
		'form_id',
		'tab_id',
		'column_id',
		'type',
		'placeholder',
		'autocomplete',
		'data_key',
		'multiple',
		'meta'
	);

	////////////////////////////////////////////////////////////////////
	//////////////////////////// RELATIONS /////////////////////////////
	////////////////////////////////////////////////////////////////////

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
	 * Relation with \Layla\Module\Models\Tab
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function tab()
	{
		return $this->belongsTo('Layla\Module\Models\Tab');
	}

	/**
	 * Relation with \Layla\Module\Models\Column
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function column()
	{
		return $this->belongsTo('Layla\Module\Models\Column');
	}

}
