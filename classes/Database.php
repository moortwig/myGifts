<?php

// include settings for database
// TODO change absolute path
require_once ('D:\xampp\htdocs\myGifts\www\config\db-config.php');


class Database {
	// properties for the class
	private $db_conn;
	private $db_host = 'localhost';// $dbHost;
	private $db_user = 'root'; // $dbUsername;
	private $db_pass = 'root'; // $dbPassword;
	private $db_name =  'my_gifts'; // $dbName;

	function connect() {
	// TODO vad innebär try och catch? Varför använder jag det?
		try {
			$this->db_conn = new PDO(
				"mysql:host=$this->db_host;
				dbname=$this->db_name",
				$this->db_user,
				$this->db_pass);
			return $this->db_conn;
		} catch(PDOException $e) {
			return $e->getMessage();
		}
	}
}


?>