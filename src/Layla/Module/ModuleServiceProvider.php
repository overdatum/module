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
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerRoutes();
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
