<?php
session_start();
// include everything the site needs to function

// $path = $_SERVER['DOCUMENT_ROOT'];

// this file (app.php) is then included in header.php

// CLASSES
require_once('classes/Gift.php');
require_once('classes/Item.php');
require_once('classes/Recipient.php');
require_once('classes/Session.php');
require_once('classes/User.php');

//////////////////////////////////////////////////
// FORM ACTIONS /////////////////////////////////
// SIGNUP
// signs up user and logs in that user upon successful sign up
if(isset($_POST['signup'])) {
	$user = new User();
	$user->newUser();
	header('Refresh: 2; url=index.php');
	// TODO close the connection
}

// LOGIN
// logins the user from the login form
if (isset($_POST['login'])) {
	$session = new Session();
	$session->startLoginSession();
	header('Refresh: 2; url=index.php');
}

// LOGOUT
// Logouts the user from clicking logout button
if (isset($_POST['logout'])) {
	session_destroy();
	echo "You're now being logged out, and will shortly return to the start page.";
	header('Refresh: 2; url=index.php');
}


///////////////////////////////////////////////////
// ADD RECIPIENT
if(isset($_POST['addRecipient'])) {
	$recipient = new Recipient();
	$recipient->newRecipient();
	echo "The recipient has been saved!";
	header('Refresh: 2; url=index.php');
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
	header('Refresh: 2; url=index.php');
	// TODO close the connection
}

// ADD ITEM AND CONTINUE (to Add Gift)
if(isset($_POST['addItemContinue'])) {
	$item = new Item();
	$item->newItem();
	echo "The item has been saved!";
	header('Refresh: 2; url=addGift.php');
	// TODO close the connection
}

// EDIT ITEM 	
if(isset($_POST['editItem'])) {
	$item = new Item();
	$item->editItem();
	header('location: profile.php');
}

///////////////////////////////////////////////////
// ADD GIFT
if(isset($_POST['addGift'])) {
	$gift = new Gift();
	$gift->newGift();
	echo "The gift has been saved!";
	header('Refresh: 2; url=index.php');
	// TODO close the connection
}







?>