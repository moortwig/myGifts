<?php 

require_once('header.php');

?>

<!-- MAIN BODY -->
<div class="main">
   <div class="container">
        <br />
        <br />
        <?php
        
        if(isset($_SESSION['username'])) {
            // Display this section if a user is logged in ?>
            <p>
                Ennui Truffaut messenger bag umami, tousled sustainable brunch. Vegan +1 listicle ugh. Blue Bottle shabby chic cray Carles, tote bag fixie +1. Banh mi pug Pinterest lomo, tilde keytar meggings four dollar toast twee locavore plaid literally Vice Truffaut readymade. Whatever Etsy fashion axe asymmetrical cred, shabby chic lumbersexual disrupt kogi cray sartorial artisan YOLO readymade. Pour-over Truffaut you probably haven't heard of them, semiotics gentrify narwhal Godard cronut selvage. Vegan street art +1 hashtag drinking vinegar, wayfarers small batch shabby chic post-ironic swag.
            </p>
        </div><!-- .container -->

    <?php } else {

        // Display this section if user has not logged in ?>    
        <div class="row">
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
                        Your gift reminder right there in your pocket.
                        <h4 class="form-signin-heading">Not registered yet?</h4><a href="signup.php" class="btn btn-lg btn-success btn-block">SIGN UP NOW</a>
                    </div>
                </div><!-- .container -->
            </form>
        </div><!-- .row -->

        
    <?php } ?>

</div><!-- .main -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>
