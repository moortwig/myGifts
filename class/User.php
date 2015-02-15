<?php
require_once ('Database.php');
require_once ('Session.php');

class User {
	// properties 
	public $id;
	public $username;
	public $password;
	public $email;
	public $joined;


	//////////////////////////////////////////////////////
	// QUERY TO COMPARE USERNAMES ///////////////////////
	private function checkUsernameExists($username) {
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM users WHERE username = '$username'");
		// execute the query
		$query->execute();
		// fetch results
		$results = $query->fetchAll();
		// count the number of rows fetched, so we can use it in the if statement
		$count = count($results);

		// if rows === 1, return true
		if ($count !== 1) {
			return false;
		} else {
			// else return false
			return true;
		}		
	}

	//////////////////////////////////////////////////////
	// QUERY SAVE USER TO DB ////////////////////////////
	private function saveUser($username, $password, $email) {
		$database = new Database();

		$query = $database->connect()->prepare('INSERT INTO users (username, password, email) VALUES (?,?,?)');
		$values = array($username, $password, $email);
		$query->execute($values);
	}

	//////////////////////////////////////////////////////
	// PICKS UP FORM DATA ///////////////////////////////
	public function newUser() {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		$check = $this->checkUsernameExists($username);

		if ($check === true) {
			echo "The username already exists! You will be redirected shortly.";
		} else {
			echo "Welcome, " . $username . "! You have successfully signed up, and will shortly be redirected to the start page.";
			// session works, but it would be nice if we could do it differently, I suppose We do have a session class >.< ...
			$_SESSION['username'] = $username;
			return $this->saveUser($username, $password, $email);
		}		
	}

	//////////////////////////////////////////////////////
	public function getUser($user) {
		// hämtar ALLT från databasen, inkl password(?) om en användare
	}

	public function getUserId($username) {
		// hämtar id från databasen för användare
		$database = new Database();

		$query = $database->connect()->query("SELECT id FROM users WHERE username = '$username'");
		// execute the query
		$query->execute();

	}

	public function checkUserForLogin($username, $password) {		
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
		// execute the query
		$query->execute();
		// fetch results
		$results = $query->fetchAll();
		// count the number of rows fetched, so we can use it in the if statement
		$count = count($results);

		if ($count !== 1) {
			return false;
		} else {
			// else return false
			return true;
		}	
	}

	//////////////////////////////////////////////////////
	public function editUser($user) {
		// redigerar den inloggade användarens uppgifter
	}


	//////////////////////////////////////////////////
	// GETTERS //////////////////////////////////////
	// these methods will help me get data!
	/*public function getId() {
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
	}*/


	//////////////////////////////////////////////////
	// SETTERS //////////////////////////////////////
	// these methods will help me set data!
	/*public function setId($id) {
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
	}*/


}

?>