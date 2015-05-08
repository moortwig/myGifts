<?php
require_once ('Database.php');
require_once ('Session.php');

class User {
	// class properties 
	public $id;
	public $username;
	public $password;
	public $email;
	public $joined;



	//////////////////////////////////////////////////////
	// PICKS UP FORM DATA ///////////////////////////////
	public function newUser() {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		$hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Encrypt password:
		$check = $this->checkUsernameExists($username); // returns true or false

		if ($check === true) {
			echo "The username already exists! You will be redirected shortly.";
		} else {
			echo "Welcome, " . $username . "! You have successfully signed up, and will shortly be redirected to the start page.";

			return $this->insertUser($username, $hashedPassword, $email);
		}
	}


	//////////////////////////////////////////////////
	// ----- QUERIES --------------------------------
	////////////////////////////////////////////////

	//////////////////////////////////////////////////////
	// QUERY TO COMPARE USERNAMES ///////////////////////
	private function checkUsernameExists($username) {
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM users WHERE username = '$username'");
		$query->execute(); // execute the query
		$results = $query->fetchAll(); // fetch results
		// count the number of rows fetched, so we can use it in the if statement
		$count = count($results);

		// if there's one row, return true
		if ($count !== 1) {
			return false;
		} else {
			return true;
		}
	}


	//////////////////////////////////////////////////////
	// QUERY SAVE USER TO DB ////////////////////////////
	private function insertUser($username, $hashedPassword, $email) {
		$database = new Database();

		$db = $database->connect();
		$query = $db->prepare('INSERT INTO users (username, password, email) VALUES (?,?,?)');
		$values = array($username, $hashedPassword, $email);
		$query->execute($values);

		$userId = $db->lastInsertId(); // get user id for session

		$_SESSION['username'] = $username; // logs in user after signing up
		$_SESSION['userId'] = $userId; // logs in user after signing up
	}


	//////////////////////////////////////////////////////
	// QUERY USER ID FROM DB ////////////////////////////
	public function getUserId($username) {
		$database = new Database();

		$query = $database->connect()->query("SELECT id FROM users WHERE username = '$username'");
		
		$query->execute(); // execute the query
		$result = $query->fetchObject(); // fetch result as an object

		return $result;

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

		// verify password compares the inserted password with the hashed password in the database
		if ($password == password_verify($password, $hashedPassword)) {
			$count = count($result);
			
			if ($count !== 1) {
				return false;
			} else {
				return true;
			}
		} else {
			return false;
		}		
	}

}

?>