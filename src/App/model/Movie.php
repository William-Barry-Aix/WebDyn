<?php
namespace App\model;

use Monframework\App\Model;
use App\model\Person;

class Movie extends Model{
	use \App\model\HasPictureTrait;

	public function __construct(){
		parent::__construct('movie');
	}
	public function getAllDirectors($idMovie){
		return $this->getAllPersons($idMovie, 'director');
	}
	public function getAllActors($idMovie){
		return $this->getAllPersons($idMovie, 'actor');
	}

	public function getAllPersons($idMovie, $role){
		$query = "SELECT person.* FROM `moviehasperson` AS link JOIN person ON person.id = link.idPerson WHERE link.idMovie = :idMovie AND link.role = :role";
		$stmt = $this->connection->prepare($query);
		try {
		    $stmt->execute([':idMovie' => $idMovie,
		    				':role' => $role]);
		} catch (PDOException $e) {
		    print($e);
		}
		$persons = $stmt->fetchAll(\PDO::FETCH_ASSOC);
		$personModel = new Person();
		foreach ($persons as $key => $person) {
			$persons[$key]['pictures'] = $personModel->getPicture($person['id']);
		}
		return $persons;
	}

	public function getGallery($idMovie){
		return $this->getPicture($idMovie, 'gallery');
	}

	public function getPoster($idMovie){
		return $this->getPicture($idMovie, 'poster');
	}

	public function getPicture($idMovie, $type){
		$query = "SELECT picture.* 
				  FROM `moviehaspicture` AS link 
				  JOIN picture ON picture.id = link.idPicture 
				  WHERE link.idMovie = :idMovie AND link.type = :type";
		$stmt = $this->connection->prepare($query);
		try {
		    $stmt->execute([':idMovie' => $idMovie,
		    				':type' => $type]);
		} catch (PDOException $e) {
		    print($e);
		}
		
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
}