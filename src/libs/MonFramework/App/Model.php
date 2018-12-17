<?php
namespace MonFramework\App;

use MonFramework\App\Db;

class Model {
	public $connection;
	private $tableName;

	public function __construct($table){
		$this->connection = Db::getInstance()->getPdo();
		$this->tableName = $table;
	}

	public function select(){
		$query = "SELECT * FROM $this->tableName ";
		$stmt = $this->connection->prepare($query);
		try {
		    $stmt->execute();
		} catch (PDOException $e) {
		    print($e);
		}
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function find($id){
		$query = "SELECT * FROM $this->tableName WHERE id = :id";
		$stmt = $this->connection->prepare($query);
		try {
		    $stmt->execute(array(':id' => $id));
		} catch (PDOException $e) {
		    print($e);
		}
				
		return $stmt->fetch(\PDO::FETCH_ASSOC);	
	}

	public function getTableName(){
		return $this->tableName;
	}
}