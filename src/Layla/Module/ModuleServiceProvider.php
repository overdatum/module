<?php namespace Layla\Module;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use Layla\Module\TemplateLoader;

use Layla\Module\Resources\Model;

use Layla\Module\Blueprints\Resource\Model as ModelBlueprint;

use Layla\Module\Compilers\Resources\Laravel\ModelCompiler;
use Layla\Module\Compilers\Languages\Php\PropertyCompiler;
use Layla\Module\Compilers\Languages\Php\MethodCompiler;

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
		$this->registerHelpers();

		$model = new Model(array(
			'name' => 'Trapps.Domain.Models.NewsItem',
			'base' => 'Illuminate.Database.Models.Eloquent',
			'relations' => array(
				array(
					'name' => 'user',
					'type' => 'has_one',
					'other' => 'Trapps.Domain.Models.User'
				)
			),
			'columns' => array(
				array(
					"name" => "name",
					"type" => "DataType::STRING",
					"max_length" => 255,
					"rules" => array(
						"required",
						"max:255"
					)
				)
			)
		));

		$blueprint = $model->getBlueprint();
		$compiler = $blueprint->getCompiler();
		dd($compiler->compile());
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerCommands();
		$this->registerModule();
		$this->registerCompilers();

		$this->app->singleton('layla.module::template.loader', function()
		{
			return new TemplateLoader;
		});
	}

	public function registerModule()
	{
		$this->app->singleton('layla.module::module', function()
		{
			$module = new Module(new TemplateLoader());
			$module->language('php');
			$module->framework('laravel');

			return $module;
		});
	}

	public function registerCompilers()
	{
		$this->app->bind('layla.module::php.method', function($app, $blueprint)
		{
			return new MethodCompiler($blueprint);
		});

		$this->app->bind('layla.module::php.property', function($app, $blueprint)
		{
			return new PropertyCompiler($blueprint);
		});

		$this->app->bind('layla.module::laravel.model', function($app, $blueprint)
		{
			return new ModelCompiler($blueprint);
		});
	}

	/**
	 * Register the commands
	 *
	 * @return void
	 */
	public function registerCommands()
	{
		$this->app['module.generate.controller'] = $this->app->share(function($app)
        {
        	return new Commands\GenerateControllerCommand;
        });

		$this->commands(array(
			'module.generate.controller'
		));
	}

	/**
	 * Register the helpers.
	 *
	 * @return void
	 */
	public function registerHelpers()
	{
		require __DIR__.'/../../helpers.php';
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
