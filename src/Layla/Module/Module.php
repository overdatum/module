<?php namespace Layla\Module;

class Module {

	/**
	 * The template loader
	 *
	 * @var \Layla\Module\TemplateLoader
	 */
	protected $templateLoader;

	/**
	 * The language to compile for
	 *
	 * @var string
	 */
	protected $language;

	/**
	 * The framework to compile for
	 *
	 * @var string
	 */
	protected $framework;

	/**
	 * Create a new Module intance
	 *
	 * @param \Layla\Module\TemplateLoader $templateLoader
	 */
	public function __construct($templateLoader)
	{
		$this->templateLoader = $templateLoader;
	}

	/**
	 * Retrieve the templateloader for a given path
	 *
	 * @param  string $path Path to the template loader
	 * @return \Layla\Module\TemplateLoader
	 */
	public function templateLoader($path)
	{
		return $this->templateLoader->path($path);
	}

	public function getLanguage()
	{
		return $this->language;
	}

	public function language($language)
	{
		$this->language = $language;
	}

	public function getFramework()
	{
		return $this->framework;
	}

	public function framework($framework)
	{
		$this->framework = $framework;
	}

}
