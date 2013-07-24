<?php
/**
 * @package    Fuel\Config
 * @version    2.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Fuel\Config;

/**
 * FuelPHP Composer library framework bootstrap
 */

// register the services of this library
\Fuel::getDic()->registerService(new ServicesProvider);

/**
 * FuelPHP Composer library application bootstrap
 */
return function($app) {

	// your app initialisation code here
};