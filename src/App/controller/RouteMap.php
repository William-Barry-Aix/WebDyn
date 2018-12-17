<?php
namespace App\controller;
use App\controller\MovieController;

class RouteMap {
	public static function map($routes){
		//var_dump($routes);
		if (strcmp($routes[1], '') == 0){
			$controller = new MovieController();
			$controller->show();
			return;
		}else if (strcmp($routes[1], 'person') == 0) {
			$controller = new PersonController();
			if (array_key_exists(2, $routes)){
				if (strcmp($routes[2], '') == 0) {
					$controller->index();
					return;
				}else if (is_numeric($routes[2])) {
					$controller->show($routes[2]);
					return;
				}
			}
		} else if (strcmp($routes[1], 'movie') == 0) {
			$controller = new MovieController();
			if (array_key_exists(2, $routes)){
				if (strcmp($routes[2], '') == 0) {
					$controller->index();
					return;
				}else if (is_numeric($routes[2])) {
					$controller->show($routes[2]);
					return ;
				}
			}
		} 
		else{
			return null;
		}
	}
}
