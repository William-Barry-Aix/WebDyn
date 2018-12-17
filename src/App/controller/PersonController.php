<?php
namespace App\controller;
use MonFramework\Controllers\Controller;
use App\model\Movie;
use App\model\Person;

class PersonController extends Controller{
	public function index() {
		
	}
	public function show($idPerson = 1){
		$person = new Person();
		var_dump($person->getPictures($idPerson));
		$data = array('person' => $person->find($idPerson));
		return $this->getView($data);
	}
}