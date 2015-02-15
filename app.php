<?php
session_start();
// include everything the site needs to function

// $path = $_SERVER['DOCUMENT_ROOT'];

// this file (app.php) is then included in header.php

// CLASSES
// require_once('class/Database.php');
// require_once('class/Gift.php');
// require_once('class/Item.php');
// require_once('class/Recipient.php');
require_once('class/Session.php');
require_once('class/User.php');

//////////////////////////////////////////////////
// FORM ACTIONS /////////////////////////////////
// SIGNUP
// signs up user and logs in that user upon successful sign up
if(isset($_POST['signup'])) {
	$user = new User();
	$user->newUser();
	header('Refresh: 3; url=index.php');
	// TODO login user

	// $session->startSession($login);
	// TODO close the connection
}

// LOGIN
// logins the user from the login form
// TODO !!!
if (isset($_POST['login'])) {
	$session = new Session();
	$session->startLoginSession();
	header('Refresh: 3; url=index.php');
}









?>