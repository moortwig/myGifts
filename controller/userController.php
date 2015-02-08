<?php
// TODO path
require_once ('D:\xampp\htdocs\myGifts\www\class\User.php');
session_start();

// TODO: "Dress" these thingies in functions. Could call on these functions from app.php, for instance
// TODO: Move queries to a UserModel

///////////////////////////////////////////////////////
// SIGN UP ///////////////////////////////////////////
// TODO check if username already exists
// TODO Exceptions
// TODO Success feedback
// TODO Log in if successfully signed up
// TODO Send confirmation on email

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

?>