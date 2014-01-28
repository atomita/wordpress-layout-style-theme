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

		$paths = array();
		foreach($layouts as $layout) {
			$paths[] = 'layout/' . $layout . '.php';
		}
		if ($path = locate_template($paths, false)) {
			include $path;
		}
		else {
			include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'wp-layout-style-theme' . DIRECTORY_SEPARATOR . 'default.php';
		}
		return false;
	}
	
}
