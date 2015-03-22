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
    <?php 
        
        if(isset($_SESSION['username'])) { ?>
            <!-- Display this section if a user is logged in -->
            <div class="logged-in">
                <p>Hello <?php echo $_SESSION['username']; ?>!</p>
                <a href="index.php">Home</a>
                <a href="profile.php">Profile</a>
                <form method="post" action="app.php" role="form">
                    <input type="submit" class="" name="logout" value="Log out" />
                </form>
            </div><!-- .logged-in -->
        <?php } else {
        // Display this section if noone has logged in yet! ?>
    <div class="log-in">
        <h2>Log in</h2>
        <!--    TODO adjust this for the new structure! -->
        <form method="post" action="app.php" role="form">
            <label for="user">Username:</label>
            <input type="text" name="user" placeholder="Username" />
            <label for="pass">Password:</label>
            <input type="password" name="pass" placeholder="Password" />
            <input type="submit" class="" name="login" value="Log in" /><br />
        </form>
    </div><!-- .log-in -->
    <?php } ?>
</nav>