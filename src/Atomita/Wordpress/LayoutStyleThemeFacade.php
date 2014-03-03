<?php

namespace Atomita\Wordpress;

/**
 * LayoutStyleThemFacade
 * 
 * @author atomita
 */
class LayoutStyleThemeFacade extends \Atomita\Facade
{
	static protected function facadeInstance()
	{
		static $instance;
		if (!isset($instance)){
			$instance = new LayoutStyleThem();
		}
		return $instance;
	}

}
