<?php
require_once ('D:\xampp\htdocs\myGifts\www\class\Database.php');

class User {
	// properties 
	public $id;
	public $username;
	public $password;
	public $email;
	public $joined;
	public $link; // becomes a link to the db through the construct

	function __construct(){
        $database = new Database();
        $this->link = $database->connect();
        return $this->link;
    }

	//////////////////////////////////////////////////
	// GETTERS //////////////////////////////////////
	// these methods will help me get data!
	public function getId() {
		return $this->id;	// $id
	}

	public function getUsername() {
		return $this->username;	// $username
	}

	public function getPassword() {
		return $this->password;	// $password
	}

	public function getEmail() {
		return $this->email;	// $email
	}

	public function getJoined() {
		return $this->joined;	// $joined
	}


	//////////////////////////////////////////////////
	// SETTERS //////////////////////////////////////
	// these methods will help me set data!
	public function setId($id) {
		$this->id = $id;
		return $this->id;
	}

	public function setUsername($username) {
		$this->username = $username;
		return $this->username;
	}

	public function setPassword($password) {
		$this->password = $password;
		return $this->password;
	}

	public function setEmail($email) {
		$this->email = $email;
		return $this->email;
	}

	public function setJoined($joined) {
		$this->joined = $joined;
		return $this->joined;
	}
}


?>