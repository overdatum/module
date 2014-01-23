<?php namespace Layla\Module;

use Layla\Module\Blueprints\Methods;
use Illuminate\Support\Str;

class TemplateLoader {

	/**
	 * The template directories relative from the path
	 *
	 * @var array
	 */
	protected $directories = array(
		'properties' => 'Properties',
		'methods' => 'Methods',
		'bodies' => 'Bodies'
	);

	/**
	 * Set the root path
	 *
	 * @param  string $path
	 * @return self
	 */
	public function path($path)
	{
		$this->path = $path;

		return $this;
	}

	/**
	 * Set the template directories
	 *
	 * @param  array $directories The template directories relative from the path
	 * @return self
	 */
	public function directories($directories)
	{
		$this->directories = $directories;

		return $this;
	}

	/**
	 * Load all method templates
	 *
	 * @return \Layla\Module\Blueprints\Methods
	 */
	public function methods()
	{
		$pattern = $this->path.$this->directories['methods'].'/*.php';

		$methods = Methods::make();
		foreach(glob($pattern) as $file)
		{
			if( ! $methods->has($file))
			{
				$methods->put($file, file_get_contents($file));
			}
		}

		return $methods;
	}

	/**
	 * Load a single method template
	 *
	 * @param  string $name name of the method
	 * @return \Layla\Module\Blueprints\Method
	 */
	public function method($name)
	{
		$language = "php"; // @todo make global

		$file = $this->path.'/'.$this->directories['methods'].'/'.$name.'.'.$language;
		if(file_exists($file))
		{
			return file_get_contents($file);
		}

		return null;
	}

	/**
	 * Load a single method body
	 *
	 * @param  string $name name of the body
	 * @return string
	 */
	public function body($name, $data = array())
	{
		$language = "php"; // @todo make global

		$file = $this->path.'/'.$this->directories['bodies'].'/'.$name.'.'.$language;
		if(file_exists($file))
		{
			return eval_blade_string(file_get_contents($file), $data);
		}

		return null;
	}

}
