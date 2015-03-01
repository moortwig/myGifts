<?php 

require_once('header.php');

?>
<div class="main">
    <?php
    // Display this section if a user is logged in
    if(isset($_SESSION['username'])) { ?>

        <h2>Add Gift</h2>

		<div class="signup">
            <h2>Sign up</h2>
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
        </div><!-- .signup -->