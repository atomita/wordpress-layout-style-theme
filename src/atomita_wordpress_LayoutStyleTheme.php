<?php

if (false){
	
	/**
	 * atomita_wordpress_LayoutStyleTheme
	 * 
	 * @author atomita
	 */
	class atomita_wordpress_LayoutStyleTheme
	{
		var $layout		  = 'default';
		var $contents_varname = 'contents';
		var $layouts_dir	  = 'layout';

		protected $priority;
	
		/**
		 * @param	$layouts_dir	string	layouts directory name
		 * @param	$priority	int	priority of wordpress filter
		 */
		function __construct($layouts_dir = 'layout', $priority = PHP_INT_MAX){}

		/**
		 * set wordpress filter
		 */
		function initialize(){}

		/**
		 * remove wordpress filter
		 */
		function uninitialize(){}

		/**
		 * call from "template_include" filter
		 */
		function apply($template){}
	
	}

}
else{
	$file = '/atomita/wordpress/LayoutStyleTheme.php';
	if ('/' != DIRECTORY_SEPARATOR){
		$file = str_replace('/', DIRECTORY_SEPARATOR, $file);
	}
	
	$definition = ltrim(file_get_contents(dirname(__FILE__) . $file), '<?php');

	eval(str_replace(
		array(
			'namespace atomita\\wordpress;',
			'class LayoutStyleTheme',
			'include rtrim(__FILE__, \'.php\') . DIRECTORY_SEPARATOR . \'default.php\';',
		),
		array(
			'',
			'class atomita_wordpress_LayoutStyleTheme',
			'include dirname(__FILE__) . DIRECTORY_SEPARATOR . str_replace(\'_\', DIRECTORY_SEPARATOR, rtrim(basename(__FILE__), \'.php\')) . \'default.php\';',
		),
		$definition));
}
