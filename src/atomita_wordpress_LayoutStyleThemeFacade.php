<?php

/**
 * atomita_wordpress_LayoutStyleThemeFacade
 * 
 * @author atomita
 */
class atomita_wordpress_LayoutStyleThemeFacade
{
	static protected function facadeInstance()
	{
		static $instance;
		if (!isset($instance)){
			$instance = new atomita_wordpress_LayoutStyleTheme();
		}
		return $instance;
	}

	static function __callStatic($method, $args)
	{
		$instance = self::facadeInstance();
		return call_user_func_array(array($instance, $method), $args);
	}

}
