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

    <!-- CSS -->
    <!-- <link rel="stylesheet" type="text/css"  href="css/style.css"> -->

</head>
<body>

<div class="nav">
    <?php 
        // Display this section if a user is logged in
        // TODO adjust this for the new structure!
        $user = new User();
        $session = new Session();
        // TODO check if getSession($user) == something ???
        if(isset($_SESSION['username'])) { ?>
            <div class="logged-in">
                <p>Hello <?php echo $_SESSION['username']; ?>!</p>
                <form method="post" action="app.php" role="form">
                    <input type="submit" class="" name="logout" value="Log out" />
                </form>
            </div>
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
    </div>
    <?php } ?>
</div>

<!-- MAIN BODY -->
<div class="main">
   
    <br />
    <br />
    <!-- SIGN UP -->
    <h2>Sign up</h2>
    <div id="form">
        <!--    TODO adjust this for the new structure!  -->
        <form class="form-horizontal" method="post" action="app.php" role="form">
            <label for="Username">Username:</label>
            <input type="text" name="username" class="form-control" placeholder="Username" /><br />
            <label for="Password">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Password" /><br />
            <!-- TODO JavaScript regex password check below: -->
            <!-- <label for="Passwordcheck">Retype password:</label>
            <input type="password" name="pwdCheck" name="" class="form-control" placeholder="Retype password" /><br />-->
            <label for="E-mail">E-mail:</label>
            <input type="email" name="email" class="form-control" placeholder="E-mail" /><br />
            <!-- buttons: -->
            <!-- TODO jQuery on click clear form
            <input type="submit" class="button" name="clear" value="CLEAR" /> -->

            <!-- TODO JavaScript check that all fields are filled in: -->
            <!-- TODO jQuery on key down "Enter" -> Submit -->
            <input type="submit" class="" name="signup" value="Submit" />
        </form>
    </div><!-- #signupForm -->

</div><!-- .main -->
<!-- FOOTER -->

<!-- JavaScript -->
<!--
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/main.js"></script>  
-->