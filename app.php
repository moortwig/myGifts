<?php
session_start();
// include everything the site needs to function

// $path = $_SERVER['DOCUMENT_ROOT'];

// this file (app.php) is then included in header.php

// CLASSES
require_once('class/Gift.php');
require_once('class/Item.php');
require_once('class/Recipient.php');
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
	// TODO close the connection
}

// LOGIN
// logins the user from the login form
if (isset($_POST['login'])) {
	$session = new Session();
	$session->startLoginSession();
	header('Refresh: 3; url=index.php');
}

// LOGOUT
// Logouts the user from clicking logout button
if (isset($_POST['logout'])) {
	// destroy sessions
	session_destroy();
	echo "You're now being logged out, and will shortly return to the start page.";
	header('Refresh: 3; url=index.php');
}


///////////////////////////////////////////////////
// ADD RECIPIENT
if(isset($_POST['addRecipient'])) {
	$recipient = new Recipient();
	$recipient->newRecipient();
	echo "The recipient has been saved!";
	header('Refresh: 3; url=index.php');
	// TODO close the connection
}

// EDIT RECIPIENT 	
if(isset($_POST['editRecipient'])) {
	$recipient = new Recipient();
	$recipient->editRecipient();
	header('location: profile.php');
}

// DELETE RECIPIENT 	
if(isset($_POST['deleteRecipient'])) {
	// TODO test this
	$recipient = new Recipient();
	$recipient->deleteRecipient($recipientId);
	header('location: profile.php');
}


///////////////////////////////////////////////////
// ADD ITEM
if(isset($_POST['addItem'])) {
	$item = new Item();
	$item->newItem();
	echo "The item has been saved!";
	header('Refresh: 3; url=index.php');
	// TODO close the connection
}

// EDIT ITEM 	
if(isset($_POST['editItem'])) {
	$item = new Item();
	$item->editItem();
	header('location: profile.php');
}








?>