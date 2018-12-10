<?php
namespace Application;
use MonFramework\Controllers\Controller;

class MovieController extends Controller{
	public function index() {
		return $this->getView();
	}
}