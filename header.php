<?php

// include the files that keeps track on all necessary files
require_once('app.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>myGifts</title>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" type="text/css"  href="resources/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"  href="resources/css/vendor/signin.css">

    <!-- TONICONS -->
    <link rel="stylesheet" type="text/css"  href="resources/css/vendor/tonicons.css">

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Nanoscroller CSS -->
    <link rel="stylesheet" href="resources/css/vendor/nanoscroller.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css"  href="resources/css/style.css">

</head>
<body>

<div class="wrapper">

<nav class="navbar navbar-fixed-top navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-coll" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">myGifts</a>
        </div><!-- .navbar-header -->

        <div class="collapse navbar-collapse" id="navbar-coll">
            <div class="container">
                <?php if(!isset($_SESSION['username'])) { ?>

                <ul class="nav navbar-nav">
                    <!-- if not logged in, display disabled menu icons -->
                    <li>
                        <a href="#" class="btn disabled">
                            <span class="li-text-rec">Recipients</span>
                            <i class="ton-li-people-7"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn disabled">
                            <span class="li-text-gift">Add gift</span>
                            <i class="ton-li-box-1"></i>
                        </a>
                    </li>
                    <li>
                        <a href="about.php" class="btn enabled">
                            <span class="li-text-about">About</span>
                            <i class="ton-li-speech-buble-4"></i>
                        </a>
                    </li>
                </ul>
                <?php } ?>

                <?php if(isset($_SESSION['username'])) { ?>
                <?php

                $recipient = new Recipient();
                $userId = $_SESSION['userId'];
                
                // get recipients so we can see if there are any on this user
                $recipients = $recipient->getAllRecipients($userId);

                ?>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="recipients.php" class="btn enabled">
                            <span class="li-text-rec">Recipients</span>
                            <i class="ton-li-people-7"></i>
                        </a>
                    </li>
                    <?php if (!$recipients) {?>
                        <!-- Disable button if there are no recipients -->
                        <li>
                            <a href="additem.php" class="btn disabled">
                                <span class="li-text-gift">Add gift</span>
                                <i class="ton-li-box-1"></i>
                            </a>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a href="additem.php" class="btn enabled">
                                <span class="li-text-gift">Add gift</span>
                                <i class="ton-li-box-1"></i>
                            </a>
                        </li>
                    <?php } ?>
                    <li>
                        <a href="about.php" class="btn enabled">
                            <span class="li-text-about">About</span>
                            <i class="ton-li-speech-buble-4"></i>
                        </a>
                    </li>
                </ul>
               
                    <form class="navbar-form navbar-right" method="post" action="app.php" role="form">
                        <button type="submit" class="btn btn-sm btn-danger" name="logout">Log out</button>
                    </form>
                <?php } else { ?>
                    <form class="navbar-form navbar-right" method="post" action="app.php" role="form">
                        <label for="inputUsername" class="sr-only">Username</label>
                        <input type="text" name="user" placeholder="Username" class="form-control" />
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" name="pass" placeholder="Password" class="form-control" />
                        <button type="submit" name="login" class="btn btn-sm btn-primary">Log in</button>
                    </form>
                <?php } ?>
            </div><!-- .container -->
        </div><!-- .navbar-collapse -->
    </div><!-- .container-fluid -->
</nav>
