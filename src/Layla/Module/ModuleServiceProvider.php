<?php namespace Layla\Module;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('layla/module');
		$this->registerRoutes();
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Register the routes.
	 *
	 * @return void
	 */
	public function registerRoutes()
	{
		$route = $this->app->make('router');

		$route->resource('api/modules', 'Layla\Module\Controllers\Api\ModuleController');
		$route->resource('api/resources', 'Layla\Module\Controllers\Api\ResourceController');
		$route->resource('api/columns', 'Layla\Module\Controllers\Api\ColumnsController');
		$route->resource('api/fields', 'Layla\Module\Controllers\Api\FieldsController');
		$route->resource('api/forms', 'Layla\Module\Controllers\Api\FormsController');
		$route->resource('api/relations', 'Layla\Module\Controllers\Api\RelationsController');
		$route->resource('api/tabs', 'Layla\Module\Controllers\Api\TabsController');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
