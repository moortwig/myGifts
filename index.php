<?php 

require_once('header.php');

?>

<!-- MAIN BODY -->
<div class="wrapper index-page">
    <?php
    
    if(isset($_SESSION['username'])) {
        // Include this template if a user is logged in 
        include_once('logged-in.php'); ?>
    <?php } else {
     // Display this section if user has not logged in ?>
    <!-- <div class="section-wrapper"> -->
        <!-- <div class="landing-section"> -->
        <div class="landing-headline-container">
            <div class="row">
                <div class="col-xs-12 col-lg-8">
                    <h1 class="text-center"><span class="landing-headline">Your gift reminder in the pocket.</span></h1>
                    <ul class="landing-text">
                        <li>Keep track of items you've given away.</li>
                        <li>Add your friends and family to your own registry.</li>
                        <li>Free to use!</li>
                    </ul>
                </div><!-- .col-md-4 -->

                <div class="col-xs-12 col-lg-4">
                    <h3 class="text-center call">Not registered yet?</h3>
                        <div class="btn-container">
                            <a href="signup.php" class="btn btn-lg btn-success btn-block"><i class="ton-li-new-mail"></i>SIGN UP NOW</a>
                        </div><!-- .btn-container -->
                </div><!-- .col-md-4 -->
            </div><!-- .row -->
        </div><!-- .landing-headline-container -->

        <!-- </div> --><!-- .landing-section -->
    <!-- </div>.section-wrapper -->

    
    
<?php } ?>

</div><!-- .index-wrapper -->
<!-- FOOTER -->
<?php 

require_once('footer.php');

?>


