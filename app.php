<?php
// include everything the site needs to function

$path = $_SERVER['DOCUMENT_ROOT'];



// this file (app.php) is then included in header.php
// CLASSES
require_once('classes/Database.php');
require_once('classes/Gift.php');
require_once('classes/GiftGiven.php');
require_once('classes/Recipient.php');
require_once('classes/Session.php');
require_once('classes/User.php');




?>