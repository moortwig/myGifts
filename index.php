<?php 

require_once('header.php');

?>

<!-- MAIN BODY -->
<div class="wrapper index-page">
    <?php
    
    if(isset($_SESSION['username'])) {
        // Display this section if a user is logged in 
        include_once('logged-in.php');
    } else {
    // Display this section if user has not logged in ?>
    <div class="landing-section">
        <div class="container">
            <h1 class="landing-headline">Lorem ipsum dolor sit amet, id mei impetus omnesque.</h1>
        </div><!-- .container -->
    </div><!-- .landing -->

    <div class="sign-up-section">
        <form class="form-horizontal" method="post" action="app.php" role="form">
            <div class="container centered-content block-align">
                
                <div class="col-xs-12 col-md-3 align-columns">
                    <h1>myGifts</h1>
                    <p>Keep track of items you've given away.
                    Add your friends and family to your own registry.
                    Your gift reminder right there in your pocket.</p>
                    <h4 class="form-signin-heading">Not registered yet?</h4><a href="signup.php" class="btn btn-lg btn-success btn-block">SIGN UP NOW</a>
                </div>
            </div><!-- .container -->
        </form>
    </div>
    
<?php } ?>

    </div><!-- .index-wrapper -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>
