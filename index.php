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

<!-- MAIN BODY -->
<?php 

// ($id, $username, $password, $email, $joined)
$morticia = new User(5, 'Morticia', 'morticia', 'morticia@dj.dj', 2015-01-19);
echo $morticia->email;


?>
<br />
<br />
<br />
<br />
<br />
<!-- SIGN UP -->
<div id="form">
    <form class="form-horizontal" method="post" action="signup.php" role="form">
        <label for="Username">Username:</label>
        <input type="text" name="uname" id="username" class="form-control" placeholder="Username" /><br />
        <label for="Password">Password:</label>
        <input type="password" name="pwd" id="password" class="form-control" placeholder="Password" /><br />
        <!-- TODO JavaScript regex password check below: -->
        <!-- <label for="Passwordcheck">Retype password:</label>
        <input type="password" name="pwdCheck" id="" class="form-control" placeholder="Retype password" /><br />-->
        <label for="E-mail">E-mail:</label>
        <input type="email" name="uemail" id="email" class="form-control" placeholder="E-mail" /><br />

        <!-- buttons: -->
        <!-- TODO jQuery on click clear form
        <input type="submit" class="button" name="clear" value="CLEAR" /> -->

        <!-- TODO JavaScript check that all fields are filled in: -->
        <!-- TODO jQuery on key down "Enter" -> Submit -->
        <input type="submit" class="" name="signup" id="register" value="Submit" />
    </form>
</div><!-- #signupForm -->


<div class="wrapper">


</div><!-- .wrapper -->
<!-- FOOTER -->

<!-- JavaScript -->
<!--
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/main.js"></script>  
-->