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
    <div class="section-wrapper">
        <div class="landing-section">
            <div class="landing-headline-container">
                <h1 class="text-center"><span class="landing-headline">Your gift reminder in the pocket.</span></h1>
            </div><!-- .container -->

            <div class="landing-text">
                <div class="container">
                    <p>
                        Keep track of items you've given away. <br />
                        Add your friends and family to your own registry. <br />
                        Free to use!<br />
                    </p>
                    <!-- <p>High Life paleo fixie mustache, skateboard trust fund leggings Kickstarter asymmetrical Pitchfork jean shorts single-origin coffee chambray mumblecore Brooklyn. Actually roof party polaroid PBR distillery Shoreditch DIY chambray Intelligentsia, stumptown leggings. DIY authentic pickled 90's quinoa. Kogi Blue Bottle Brooklyn yr, sustainable kale chips photo booth disrupt ethical pug ennui Kickstarter. Quinoa roof party four dollar toast put a bird on it. Health goth 3 wolf moon slow-carb readymade umami Odd Future. Pop-up swag fanny pack, Marfa photo booth fap ennui food truck.</p> -->
                    <h3 class="text-center call">Not registered yet?</h3>
                    <div class="btn-container">
                        <a href="signup.php" data-scroll class="btn btn-lg btn-success btn-block"><i class="ton-li-new-mail"></i>SIGN UP NOW</a>
                    </div><!-- .btn-container -->
                </div><!-- .container -->
            </div><!-- .landing-text -->
        </div><!-- .landing-section -->
    </div><!-- .section-wrapper -->

    
    
<?php } ?>

</div><!-- .index-wrapper -->
<!-- FOOTER -->
<?php 

require_once('footer.php');

?>


