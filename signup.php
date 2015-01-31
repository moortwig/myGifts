<?php

require_once ('D:\xampp\htdocs\myGifts\www\class\User.php');

if(isset($_POST["signup"])) {

	// ...
	// hämta form submission
	// hämta User
	// hämta userModel-funktionen
	$user = new User();
	// TODO make this prettier

	// get from the form
	$username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];    
    $joined = $_POST['joined'];

 
    // TODO query funkar, men ger nollor i datetime
    // prepare(), execute() and rowCount() are all PDO methods
	$query = $user->link->prepare('INSERT INTO users (username, password, email, joined) VALUES (?,?,?,?)'); // prepare the query
	$values = array($username, $password, $email, $joined); // store the input data in an array
	$query->execute($values); // execute the query with the data, here inserting them into the database
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
	header('index.php');
	
}