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

    <!-- Nanoscroller CSS -->
    <link rel="stylesheet" href="resources/css/vendor/nanoscroller.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css"  href="resources/css/style.css">

</head>
<body>

<!-- Display navigation bar if a user is logged in -->
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
            <ul class="nav navbar-nav">
                <li><!-- <a href="addrecipient.php" class="btn">Add recipient</a> -->Link</li>
                <li><!-- <a href="additem.php" class="btn">Add item</a> -->Link</li>
                <li><!-- <a href="addgift.php" class="btn">Add gift</a> -->Link</li>
            </ul>

            <?php if(isset($_SESSION['username'])) { ?>
                <form class="navbar-form navbar-right" method="post" action="app.php" role="form">
                    <span class="navbar-text">Logged in: <a href="profile.php"><?php echo $_SESSION['username']; ?></a></span>
                    <button type="submit" class="btn btn-danger" name="logout">Log out</button>
                </form>
            <?php } else { ?>
                <form class="form-horizontal" method="post" action="app.php" role="form">
                    <label for="inputUsername" class="sr-only">Username</label>
                    <input type="text" name="user" placeholder="Username" class="form-control" />
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="pass" placeholder="Password" class="form-control" />
                    <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">LOG IN</button>
                </form>
            <?php } ?>
        </div><!-- .navbar-collapse -->
    </div><!-- .container -->
</nav>
