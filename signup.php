<?php 

require_once('header.php');

?>

<div class="full-screen-img sign-up-page">
    <div class="overlay sign-up-section">
        <div class="vertical-center container">
            <form class="form-signin" method="post" action="app.php" role="form">
                <h2 class="form-signin-heading">Sign up</h2>

                <label for="inputUsername" class="sr-only">>Username:</label>
                <input type="text" name="username" class="form-control" placeholder="Username" />

                <label for="inputPassword" class="sr-only">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Password" />
                <!-- TODO JavaScript regex password check below: -->
                <!-- <label for="Passwordcheck">Retype password:</label>
                <input type="password" name="pwdCheck" name="" class="form-control" placeholder="Retype password" /><br />-->
                <label for="inputEmail" class="sr-only">E-mail:</label>
                <input type="email" name="email" class="form-control" placeholder="E-mail" /><br />
                <!-- buttons: -->
                <!-- TODO jQuery on click clear form
                <input type="submit" class="button" name="clear" value="CLEAR" /> -->

                <!-- TODO JavaScript check that all fields are filled in: -->
                <!-- TODO jQuery on key down "Enter" -> Submit -->
                <button type="submit" class="btn btn-lg btn-primary btn-block" name="signup">SUBMIT</button>
            </form>
        </div><!-- .container -->
    </div><!-- .sign-up-section -->
</div><!-- .sign-up-page -->

<!-- FOOTER -->
<?php 

require_once('footer.php');

?>