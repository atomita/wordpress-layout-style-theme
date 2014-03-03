<?php

namespace Atomita\Wordpress;

/**
 * LayoutStyleThem
 * 
 * @author atomita
 */
class LayoutStyleTheme
{
	var $layout		  = 'default';
	var $contents_varname = 'contents';
	var $layouts_dirname  = 'layout';

	protected $priority;
	
	/**
	 * @param	$priority	int	priority of wordpress filter
	 */
	function __construct($priority = PHP_INT_MAX)
	{
		$this->priority = $priority;
	}

	/**
	 * set wordpress filter
	 */
	function initialize()
	{
		add_filter('template_include', array($this, 'apply'), $this->priority);
	}

	/**
	 * remove wordpress filter
	 */
	function uninitialize()
	{
		remove_filter('template_include', array($this, 'apply'), $this->priority);
	}

	/**
	 * call from "template_include" filter
	 */
	function apply($template) {
		global $wp, $wp_query, $wp_the_query;
		
		ob_start();
		include $template;
		${$this->contents_varname} = ob_get_clean();
		
		$layouts = array();
		if ('default' != $this->layout) {
			$layouts[] = $this->layout;
		}
		$layouts[]= 'default';

		$paths = array();
		foreach($layouts as $layout) {
			$paths[] =  $this->layouts_dir . '/' . $layout . '.php';
		}
		if ($path = locate_template($paths, false)) {
			include $path;
		}
		else {
			include rtrim(__FILE__, '.php') . DIRECTORY_SEPARATOR . 'default.php';
		}
		return false;
	}

}
