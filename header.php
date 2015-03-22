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
    <link rel="stylesheet" type="text/css"  href="resources/css/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css"  href="resources/css/style.css">

</head>
<body>

<nav class="navbar navbar-fixed-top">
    <div class="container">
        <?php if(isset($_SESSION['username'])) { ?>
            <!-- Display this section if a user is logged in -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">myGifts</a>
            </div><!-- .navbar-header -->
            
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                </ul>
                <form class="navbar-form navbar-right" method="post" action="app.php" role="form">
                    <input type="submit" class="" name="logout" value="Log out" />
                </form>
                <span class="navbar-right navbar-brand">Logged in: <?php echo $_SESSION['username']; ?></span>
            <?php } else {
                // Display this section if noone has logged in yet! ?>
                <form class="navbar-form navbar-right" method="post" action="app.php" role="form">
                    <div class="form-group">
                        <input type="text" name="user" placeholder="Username" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" placeholder="Password" class="form-control" />
                    </div>
                    <input type="submit" class="" name="login" value="Log in"  class="btn btn-success"/>
                </form>
            </div><!-- .navbar-collapse -->
        <?php } ?>
    </div><!-- .container -->
</nav>
