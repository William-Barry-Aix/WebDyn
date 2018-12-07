<?php
namespace MonFramework\App;
      
use Application\RouteMap;
      
class Url{
	private static function getCurrentUri()
	{
	    $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
	    $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
	    if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
	    $uri = '/' . trim($uri, '/');
	    return $uri;
	}
	public static function init(){
		$base_url = Url::getCurrentUri();
		$routes = array();
		$routes = explode('/', $base_url);

		foreach($routes as $route)
		{
		    if(trim($route) != '')
		        array_push($routes, $route);
		}

		RouteMap::map($routes);
	}
	public function method() {
        var_dump(__NAMESPACE__ . ' \ ' . __CLASS__ . ' \ ' . __FUNCTION__);
    }
}