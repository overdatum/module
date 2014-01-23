<?php namespace Layla\Module\Blueprints\Language;

use Layla\Module\Facades\Module;
use Illuminate\Support\Facades\App;

class Blueprint {

	public function getCompiler()
	{
		return $this->getLanguageCompiler();
	}

	public function getResourceCompiler()
	{
		$accessor = $this->getFacadeAccessor();
		$framework = Module::getFramework();

		return App::make('layla.module::'.$framework.'.'.$accessor, $this);
	}

	public function getLanguageCompiler()
	{
		$accessor = $this->getFacadeAccessor();
		$language = Module::getLanguage();

		return App::make('layla.module::'.$language.'.'.$accessor, $this);
	}

	protected function getFacadeAccessor()
	{
		$parts = explode('\\', get_class($this));
		return strtolower(array_pop($parts));
	}

}
