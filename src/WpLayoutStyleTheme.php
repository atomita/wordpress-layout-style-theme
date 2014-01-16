<?php

/**
 * WpLayoutStyleTheme
 * 
 * @author atomita
 */
class WpLayoutStyleTheme {
	
	static $layout			 = 'default';
	static $contents_varname = 'contents';
	
	static function init($priority = 999) {
		add_filter('template_include', array('WpLayoutStyleTheme', 'apply'), $priority);
	}
	
	static function apply($template) {
		global $wp, $wp_query, $wp_the_query;
		
		ob_start();
		include $template;
		${self::$contents_varname} = ob_get_clean();
		
		$layouts = array();
		if ('default' != self::$layout) {
			$layouts[] = self::$layout;
		}
		$layouts[]= 'default';

		foreach($layouts as $layout) {
			$path = TEMPLATEPATH . implode(DIRECTORY_SEPARATOR, explode('/', '/layout/' . $layout . '.php'));
			if (file_exists($path)) {
				include $path;
				return false;
			}
		}
		echo $contents;
		return false;
	}
	
}
