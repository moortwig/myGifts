<?php
require_once ('D:\xampp\htdocs\myGifts\www\model\userModel.php');

class User {
	function __construct($id, $username, $password, $email, $joined) {
		$this->id 		= $id;
		$this->username = $username;
		$this->password = $password;
		$this->email 	= $email;
		$this->joined 	= $joined;
	}
	// dummy code here
	/*public $id = '1';
	public $username = 'root';
	public $password = 'root';
	public $email = 'yada@blah.jp';
	public $joined = '2015-01-18';*/

	// some methods here
	//////////////////////////////////////////////////
	// GETTERS //////////////////////////////////////
	public function getId() {
		return $this->id();
	}

	public function getUsername() {
		return $this->username();
	}

	public function getPassword() {
		return $this->password();
	}

	public function getEmail() {
		return $this->email();
	}

	public function getJoined() {
		return $this->joined();
	}


	//////////////////////////////////////////////////
	// SETTERS //////////////////////////////////////
	public function setId() {
		// some code
		return $this->id();
	}

	public function setUsername() {
		// some code
		return $this->username();
	}

	public function setPassword() {
		// some code
		return $this->password();
	}

	public function setEmail() {
		// some code
		return $this->email();
	}

	public function setJoined() {
		// some code
		return $this->joined();
	}


	//////////////////////////////////////////////////
	// GET USER /////////////////////////////////////

}


?>