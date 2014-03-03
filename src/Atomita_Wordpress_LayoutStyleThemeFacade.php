<?php

/**
 * Atomita_Wordpress_LayoutStyleThemeFacade
 * 
 * @author atomita
 */
class Atomita_Wordpress_LayoutStyleThemeFacade
{
	static protected function facadeInstance()
	{
		static $instance;
		if (!isset($instance)){
			$instance = new Atomita_Wordpress_LayoutStyleTheme();
		}
		return $instance;
	}

	static function __callStatic($method, $args)
	{
		$instance = self::facadeInstance();
		return call_user_func_array(array($instance, $method), $args);
	}

}
