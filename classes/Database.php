<?php

// include settings for database
// TODO change absolute path
require_once ('D:\xampp\htdocs\myGifts\www\config\db-config.php');


class Database {
	// properties for the class
	// TODO Secure the db login  
	public $db_conn;
	public $db_host = 'localhost';// $dbHost;
	public $db_user = 'root'; // $dbUsername;
	public $db_pass = 'root'; // $dbPassword;
	public $db_name = 'my_gifts'; // $dbName;

	function connect() {
		// using try/catch with PDO, so that we can catch any exceptions and not give away sensitive details (source http://www.phpro.org/tutorials/Introduction-to-PHP-PDO.html)
		try {
			// PDO = PHP Data Object
			$this->db_conn = new PDO(
				"mysql:host=$this->db_host;
				dbname=$this->db_name;charset=utf8",
				$this->db_user,
				$this->db_pass);
			return $this->db_conn;
		} catch(PDOException $e) {
			return $e->getMessage();
		}
	}
}


?>