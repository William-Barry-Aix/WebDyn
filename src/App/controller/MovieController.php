<?php
namespace App\controller;
use MonFramework\Controllers\Controller;
use App\model\Movie;
use App\model\Person;

class MovieController extends Controller{
	public function index() {
		
	}
	public function show($idMovie = 1){
		$movie = new Movie();
		var_dump($movie->getPictures($idMovie, 'poster'));
		$director = new Person();
		$movieArr = $movie->find($idMovie);
		$data = array('movie' 	=> $movie->find($idMovie),
					  'poster' => $movie->getPoster($idMovie),
					  'gallery' => $movie->getGallery($idMovie),
				 	  'director' => $movie->getAllDirectors($idMovie)[0],
				 	  'actors' => $movie->getAllActors($idMovie));
		return $this->getView($data);
	}
}