<?php
namespace MonFramework\App;

class Db {
	private static $_instance;
	private $pdo;
	private function __construct(){
		$conf = $this->getConfig();
		try {
		    $dsn = 'mysql:host=' . $conf['host'] . ';dbname=' . $conf['dbName'] . ';charset=utf8';
		    $pdo = new \PDO($dsn, $conf['user'], $conf['password']);
		    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		    $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
		    $this->pdo = $pdo;
		} catch (PDOException $e) {
		    print($e);
		}
	}
	public static function getInstance(){
		if(is_null(self::$_instance)) {
	    	self::$_instance = new Db();
	    }
		return self::$_instance;
	}
	private function getConfig(){
		return (include "App/model/config.php");
	}
	public function getPdo(){
		return $this->pdo;
	}

	
}