<?php
namespace App\model;

Trait HasPictureTrait {

	public function getPictures($id, $type=null){

		$tableName = parent::getTableName();
		$query = "SELECT picture.* 
				  FROM `" . $tableName . "haspicture` AS link 
				  JOIN picture ON picture.id = link.idPicture 
				  WHERE link.id" . ucfirst($tableName) . " = :id";
		if ($type)
			$query .=" AND link.type = :type";
		var_dump($query);
		
		$stmt = $this->connection->prepare($query);
		try {
		    $stmt->execute([':id' => $id,
		    				':type' => $type]);
		} catch (PDOException $e) {
		    print($e);
		}
		
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
}