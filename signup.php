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

    var_dump($username);

    // THE QUERY insertNewUser() ::::::
	// $query = $this->prepare("INSERT INTO users (username, password, email, joined) VALUES (?,?,?,?)");
	// $values = array($username, $password, $email, $joined);
	// $query->execute($values);
	// $counts = $query->rowCount();
	// return $counts;

    // TODO query funkar, men ger nollor i datetime
	$query = $user->link->prepare("INSERT INTO users (username, password, email, joined) VALUES (?,?,?,?)");
	$values = array($username, $password, $email, $joined);
	$query->execute($values);
	$counts = $query->rowCount();
	return $counts;


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