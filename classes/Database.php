<?php

require_once("../config/db-config.php");


class Database() {
	// some spiffy code here
	protected $db_conn;
	public $db_host = $dbHost;
	public $db_user = $dbUsername;
	public $db_pass = $dbPassword;
	public $db_name = $dbName;

	function connect() {
	// TODO vad innebär try och catch? Varför använder jag det?
		try {
			$this->db_conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user,$this->db_pass);
			return $this->db_conn;
		} catch(PDOException $e) {
			return $e->getMessage();
		}
	}
}


?>