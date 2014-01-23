<?php namespace Layla\Module\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Layla\Module\Module
 */
class Module extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'layla.module::module'; }

}
