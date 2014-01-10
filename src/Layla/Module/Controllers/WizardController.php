<?php namespace Layla\Module\Controllers;

use Layla\Module\Controllers\BaseController;

class WizardController extends BaseController {

	protected $viewPath = 'wizard';

	public function getIndexResources()
	{
		return array(
			/**
			 * Get all modules
			 */
			'modules' => function($api)
			{
				return $api->get();
			},

			/**
			 * Get all resources
			 */
			'resources' => function($api)
			{
				return $api->get();
			}
		);
	}

	public function getStoreResources()
	{
		$resourceId = null;

		return array(
			/**
			 * Insert the resource
			 */
			'resources' => function($api, $input) use ($resourceId)
			{
				$result = $api->insert($input);

				$resourceId = $result->id;
			},

			/**
			 * Insert and link relations
			 */
			'relations' => function($api, $input) use ($resourceId)
			{
				$relations = array_get($input, 'relations');

				$relations = array_map(function($relation)
				{
					$relation['resource_id'] = $resourceId;
					return $relation;
				}, $relations);

				$api->insert($relations);
			}
		);
	}

}
