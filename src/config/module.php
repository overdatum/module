<?php

return array(

	// Fallback properties to use for the Resource model
	'default' => array(

		// The base class to extend when none is specified on the resource
		'base' => array(
			'controllers' => Config::get('app.aliases.Controller'),
			'resource_controllers' => Config::get('app.aliases.Controller'),
			'models' => Config::get('app.aliases.Eloquent'),
			'migrations' => 'Illuminate\Database\Migrations\Migration',
			'seeds' => Config::get('app.aliases.Seeder'),
			'validator' => Config::get('app.aliases.Validator')
		),

		// The namespace to use when none is specified on the resource
		'namespace' => array(
			'controller' => null,
			'resource_controller' => null,
			'model' => 'Models',
			'seed' => null,
			'validator' => 'Validators',
		),

		// The path to use when none is specified on the resource
		'path' => array(
			'controllers' => 'controllers',
			'resource_controllers' => 'controllers/api',
			'models' => null,
			'migrations' => 'migrations',
			'seeds' => 'seeds',
			'validators' => null,
		),

		'filenames' => array(
			'controller' => function($resource)
			{
				return $resource->plural_name.'Controller.php';
			},
			'resource_controller' => function($resource)
			{
				return $resource->plural_name.'Controller.php';
			},
			'model' => function($resource)
			{
				return $resource->name.'.php';
			}
		)

	)

);
