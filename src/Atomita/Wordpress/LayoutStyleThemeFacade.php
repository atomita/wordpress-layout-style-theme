<?php

namespace Atomita\Wordpress;

/**
 * LayoutStyleThemeFacade
 * 
 * @author atomita
 */
class LayoutStyleThemeFacade extends \Atomita\Facade
{
	static protected function facadeInstance()
	{
		static $instance;
		if (!isset($instance)){
			$instance = new LayoutStyleTheme();
		}
		return $instance;
	}

}
