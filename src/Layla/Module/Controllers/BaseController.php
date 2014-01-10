<?php namespace Layla\Module\Controllers;

use Vespakoen\Epi\Controllers\EpiResourceController;

class BaseController extends EpiResourceController {

	/**
	 * The package to load views from
	 *
	 * @var string
	 */
	protected $package = 'module';

}
