<?php
// TEST to use query with my getter and/or setter
// Use with User class

if(isset($_POST["signup"])) {
	$user = new User();

	// nu behöver vi hämta data från formuläret 'signup'
	$username = $user->setUsername($_POST['username']);
	$password = $user->setPassword($_POST['password']);
	$email = $user->setEmail($_POST['email']);

	$query = /*$user->link->*/prepare('INSERT INTO users (username, password, email) VALUES (?,?,?)');
	$values = array($username, $password, $email);
	$query->execute($values);
}