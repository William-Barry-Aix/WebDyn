<?php
namespace Application;
use Application\MovieController;

class RouteMap {
	public static function map($routes){
		if ($routes[1] == "director") {

		} else
			$controller = new MovieController();
			$controller->index();
		}
}