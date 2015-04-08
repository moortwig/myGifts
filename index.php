<?php 

require_once('header.php');

?>

<!-- MAIN BODY -->

<div class="index-wrapper">
    <br />
    <br />
    <?php
    
    if(isset($_SESSION['username'])) {
        // Display this section if a user is logged in 
        include_once('logged-in.php');

} else {
    // Display this section if user has not logged in ?>
    <div class="login-section">
        <div class="row">
            <div class="container">
                <form class="form-horizontal" method="post" action="app.php" role="form">
                    <div class="container centered-content block-align">
                        <div class="col-xs-12 col-md-3 col-md-offset-3 align-columns">
                            <h2 class="form-signin-heading">Please log in</h2><p class="help-block">to your MyGifts account</p>
                            <label for="inputUsername" class="sr-only">Username</label>
                            <input type="text" name="user" placeholder="Username" class="form-control" />
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" name="pass" placeholder="Password" class="form-control" />
                            <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">LOG IN</button>
                        </div>
                        <div class="col-xs-12 col-md-3 align-columns">
                            <h1>myGifts</h1>
                            <p>Keep track of items you've given away.
                            Add your friends and family to your own registry.
                            Your gift reminder right there in your pocket.</p>
                            <h4 class="form-signin-heading">Not registered yet?</h4><a href="signup.php" class="btn btn-lg btn-success btn-block">SIGN UP NOW</a>
                        </div>
                    </div><!-- .container -->
                </form>
            </div><!-- .row -->
        </div><!-- .login-section -->
    
<?php } ?>

    </div><!-- .index-wrapper -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>
