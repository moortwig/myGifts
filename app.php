<?php
session_start();
// include everything the site needs to function
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
	header('location: index.php');
}

// LOGIN
// logins the user from the login form
if (isset($_POST['login'])) {
	$session = new Session();
	$session->startLoginSession();
	header('location: index.php');
}

// LOGOUT
// Logouts the user from clicking logout button
if (isset($_POST['logout'])) {
	session_destroy();
	echo "You're now being logged out, and will shortly return to the start page.";
	header('location: index.php');
}


///////////////////////////////////////////////////
// ADD RECIPIENT
if(isset($_POST['addRecipient'])) {
	$recipient = new Recipient();
	$recipient->newRecipient();
	echo "The recipient has been saved!";
	header('location: recipients.php');
}

// ADD ITEM AND CONTINUE (to Add Gift)
if(isset($_POST['storeRecipient'])) {
	header('location: addGift.php');
}


// CHOOSE RECIPIENT
if(isset($_POST['chooseRecipient'])) {
	$recipientIdArray = $_POST['recipientId'];
	$itemName = $_POST['itemName'];
	$description = $_POST['description'];

	// encode array for safer transfer
	$recipientIds = json_encode($recipientIdArray, JSON_FORCE_OBJECT);

	// assemble the url
	$url = 'addgift.php?recipients=' . $recipientIds . '&' . 'itemName=' . $itemName . '&' . 'description=' . $description;
	header('location:' . $url);
}


// EDIT RECIPIENT 	
if(isset($_POST['editRecipient'])) {
	$recipient = new Recipient();
	$recipient->editRecipient();
	header('location: recipients.php');
}


// DELETE RECIPIENT 	
if(isset($_POST['deleteRecipient'])) {
	$recipient = new Recipient();
	$recipient->deleteRecipient($recipientId);
	header('location: recipients.php');
}


///////////////////////////////////////////////////
// ADD ITEM TEMP (then go to Choose Recipient)
if(isset($_POST['addItemContinue'])) {
	$itemName = $_POST['itemName'];
	$description = $_POST['description'];
	header('location: chooserecipient.php?itemName=' . $itemName . '&' . 'description=' . $description);
}


///////////////////////////////////////////////////
// ADD GIFT
if(isset($_POST['addGift'])) {
	$item = new Item();
	$item->newItem();
	header('location: recipients.php');
}

?>