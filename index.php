<?php 

require_once('header.php');

?>

<!-- MAIN BODY -->
<?php
if(isset($_SESSION['username'])) {
    // Include this template if a user is logged in 
    include_once('logged-in.php'); ?>
<?php } else {
     // Display this section if user has not logged in ?>
    <div class="full-screen-img index-page">
        <div class="vertical-center landing-small">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="headline-container">
                        <h1 class=""><span class="landing-headline">Your gift reminder in the pocket.</span></h1>
                        <ul class="landing-text">
                            <li>Keep track of items you've given away.</li>
                            <li>Add your friends and family to your own registry.</li>
                            <li>Free to use!</li>
                        </ul>
                    </div><!-- .header-container -->
                </div><!-- .col-md-4 -->

                    <div class="col-xs-12 col-md-4">
                        <div class="sign-up-call">
                            <h3>Not registered yet?</h3>
                            <div class="btn-container">
                                <a href="signup.php" class="btn btn-lg btn-success btn-block"><i class="ton-li-new-mail"></i>SIGN UP NOW</a>
                            </div><!-- .btn-container -->

                        </div><!-- .container -->
                    </div><!-- .col-md-4 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .vertical-center -->
    </div><!-- .index-page -->
<?php } ?>

<!-- FOOTER -->
<?php 

require_once('footer.php');

?>


