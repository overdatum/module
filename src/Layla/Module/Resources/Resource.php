<?php namespace Layla\Module\Resources;

use Illuminate\Support\Fluent;

/**
 * The resource class makes sure all 'array type' array values are converted into a Fluent object.
 * By doing this we can safely ask any property without getting errors.
 * Fluent will also make it easier to modify properties after a resource has been constructed.
 */
class Resource extends Fluent {

	/**
	 * Create a new Resource instance.
	 *
	 * @param  array  $attributes
	 * @return void
	 */
	public function __construct($attributes = array())
	{
		foreach($attributes as $key => $value)
		{
			if(is_array($value))
			{
				$value = new Resource($value);
			}

			$this->attributes[$key] = $value;
		}
	}

}
