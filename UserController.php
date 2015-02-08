<?php
// OBS!!!!!!!!!! CURRENTLY THIS FILE IS NOT IN USE
require_once ('D:\xampp\htdocs\myGifts\www\class\User.php');

if(isset($_POST["signup"])) {

	$user = new User();
	// TODO encrypt password
	// nu behöver vi hämta data från formuläret 'signup'
	$username = $user->setUsername($_POST['username']);
	$password = $user->setPassword($_POST['password']);
	$email = $user->setEmail($_POST['email']);

	$query = $user->link->prepare('INSERT INTO users (username, password, email) VALUES (?,?,?)');
	$values = array($username, $password, $email);
	$query->execute($values);

	/*// create a User object
	$user = new User();
	// TODO make this prettier

	// get from the form
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
 
    // prepare(), execute() and rowCount() are all PDO methods
	$query = $user->link->prepare('INSERT INTO users (username, password, email) VALUES (?,?,?)'); // prepare the query
	$values = array($username, $password, $email); // store the input data in an array
	$query->execute($values); // execute the query with the data, here inserting them into the database*/
	// below 2 lines are not necessary to store in database KEEP HERE FOR NOW
	// $rows = $query->rowCount();
	// return $rows;


    // $username = $this->setUsername($username);
    // $password = $this->setPassword($password);
    // $email = $this->setEmail($email);
    // $joined = $this->setJoined($joined);
    // $this->insertNewUser();
    

	// check there are no users by the username

	// insert into db
	// redirect to index
	header('location: index.php');
	
}