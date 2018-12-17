<?php
namespace App\model;

use Monframework\App\Model;

class Person extends Model{
	use \App\model\HasPictureTrait;
	private $role = '';

	public function __construct(){
		parent::__construct('person');
	}

	public function getAllMovies($idPerson){
		$query = "SELECT movie.* FROM `moviehasperson` AS link JOIN movie ON movie.id = link.idMovie WHERE link.idPerson = :idPerson ";
		$stmt = $this->connection->prepare($query);
		try {
		    $stmt->execute([':idPerson' => $idPerson]);
		} catch (PDOException $e) {
		    print($e);
		}
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);;
	}

	public function getPicture($idPerson){
		$query = "SELECT picture.* 
				  FROM `personhaspicture` AS link 
				  JOIN picture ON picture.id = link.idPicture 
				  WHERE link.idPerson = :idPerson";
		$stmt = $this->connection->prepare($query);
		try {
		    $stmt->execute([':idPerson' => $idPerson]);
		} catch (PDOException $e) {
		    print($e);
		}
		
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
}