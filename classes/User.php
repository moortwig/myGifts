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
	// PICKS UP FORM DATA ///////////////////////////////
	public function newUser() {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		$cryptedPassword = crypt($password);
		$hashedPassword = password_hash($cryptedPassword, PASSWORD_DEFAULT);

		$check = $this->checkUsernameExists($username);

		if ($check === true) {
			echo "The username already exists! You will be redirected shortly.";
		} else {
			echo "Welcome, " . $username . "! You have successfully signed up, and will shortly be redirected to the start page.";

			$_SESSION['username'] = $username;
			return $this->insertUser($username, $hashedPassword, $email);
		}
	}


	//////////////////////////////////////////////////////
	// QUERY SAVE USER TO DB ////////////////////////////
	private function insertUser($username, $hashedPassword, $email) {
		$database = new Database();

		$query = $database->connect()->prepare('INSERT INTO users (username, password, email) VALUES (?,?,?)');
		$values = array($username, $hashedPassword, $email);
		$query->execute($values);
	}

	//////////////////////////////////////////////////////
	// QUERY USER ID FROM DB ////////////////////////////
	public function getUserId($username) {
		$database = new Database();

		$query = $database->connect()->query("SELECT id FROM users WHERE username = '$username'");
		// execute the query
		$query->execute();

	}

	//////////////////////////////////////////////////////
	// QUERY USER TO LOGIN //////////////////////////////
	public function checkUserForLogin($username, $password) {		
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM users WHERE username = '$username'");

		$query->execute(); // execute the query
		
		$result = $query->fetchAll(); // fetch result

		// check password:
		$hashedPassword = $result[0]['password'];

		if ($password == password_verify($password, $hashedPassword)) {
			$count = count($result);
			
			if ($count !== 1) {
				return false;
			} else {
				// else return false
				return true;
			}
		} else {
			return false;
		}		
	}
	
}

?>