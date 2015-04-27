<?php

// include settings for database
// TODO change absolute path
require_once ('config/db-config.php');


class Database extends Config {
	// properties for the class
	// TODO Secure the db login  
	public $db_conn;
	// public $dbHost = $dbHost;
	// public $dbUsername = $dbUsername;
	// public $dbPassword = $dbPassword;
	// public $dbName = $dbName;

	function connect() {
		// using try/catch with PDO, so that we can catch any exceptions and not give away sensitive details (source http://www.phpro.org/tutorials/Introduction-to-PHP-PDO.html)
		try {
			// PDO = PHP Data Object
			$this->db_conn = new PDO(
				"mysql:host=$this->dbHost;
				dbname=$this->dbName;charset=utf8",
				$this->dbUser,
				$this->dbPass);
			return $this->db_conn;
		} catch(PDOException $e) {
			return $e->getMessage();
		}
	}
}


?>