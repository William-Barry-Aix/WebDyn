<?php
namespace MonFramework\Controllers;

use MonFramework\App\View;

/**
 * 
 */
abstract class Controller
{
	public function getView($data = []){
		$path = explode('\\', get_class($this));
		$class = strtolower(array_pop($path));
		$class = substr($class, 0, strlen($class) - strlen('controller'));
		$function = debug_backtrace()[1]['function'];
		return new View("App/view/$class/$function.php", $data);
	}
	public abstract function index();
}
