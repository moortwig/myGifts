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
			return $this->saveUser($username, $password, $email);
		}		
	}

	//////////////////////////////////////////////////////
	public function getUser($user) {
		// hämtar ALLT från databasen, inkl password(?) om en användare
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

	// TODO: "Dress" these thingies in functions. Could call on these functions from app.php, for instance
// TODO: Move queries to a UserModel

///////////////////////////////////////////////////////
// SIGN UP ///////////////////////////////////////////
// TODO check if username already exists
// TODO Exceptions
// TODO Success feedback
// TODO Log in if successfully signed up
// TODO Send confirmation on email

/*
	if(isset($_POST['signup'])) {

	// get access to the classes
	$user = new User();
	$database = new Database();

	// get data from the input fields
	$username = $user->setUsername($_POST['username']);
	$password = $user->setPassword($_POST['password']);
	$email = $user->setEmail($_POST['email']);

	// connect to the database
	$connection = $database->connect();

	// do the query, preparing the values for safe injection to database
	$query = $connection->prepare('INSERT INTO users (username, password, email) VALUES (?,?,?)');
	$values = array($username, $password, $email);
	// execute the query, saving to the database
	$query->execute($values);

	// redirect to index
	header('location: ../index.php');
}

///////////////////////////////////////////////////////
// LOGIN /////////////////////////////////////////////

if (isset($_POST['login'])) {
	
	// get access to the classes
	$user = new User(); //
	$database = new Database();	

	// get data from the input fields
	$username = $_POST['user'];	// fältnamn user
	$password = $_POST['pass'];	// fältnamn pass

	// connect to the database
	$connection = $database->connect();
	
	// query to get user
	$query = $connection->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
	// execute the query
	$query->execute();
	// get the result
	$results = $query->fetchAll();
	// count the number of rows fetched, so we can use it in the if statement
	$count = count($results);
	// if there's exactly one match in the query, we'll make a logged in session!
	if ($count === 1) {
		// bind the $username variable to the session['username']
		$_SESSION['username'] = $username;
	} else {
		echo "Ooops, something went wrong! Do try again.";
	}

	// redirect to index
	header('location: ../index.php');
}

///////////////////////////////////////////////////////
// LOGOUT ////////////////////////////////////////////
if (isset($_POST['logout'])) {
	// destroy sessions
	session_destroy();
	header('location: ../index.php');
}
*/

}

?>