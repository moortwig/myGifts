<?php 

require_once('header.php');

?>

<!-- MAIN BODY -->
<div class="wrapper index-page">
    <?php
    
    if(isset($_SESSION['username'])) {
        // Display this section if a user is logged in 
        // include_once('logged-in.php'); ?>
        <div class="welcome">
        <div class="jumbotron">
            <h1>Hello, world!</h1>
            <p>...</p>
            <p>I'm totally logged in</p>
        </div><!-- .jumbotron -->
        </div><!-- .welcome -->
    <?php } else {
     // Display this section if user has not logged in ?>
    <div class="section-wrapper">
        <div class="landing-section">
            <div class="container">
                <h1 class="text-center"><span class="landing-headline">Lorem ipsum dolor sit amet, id mei impetus omnesque.</span></h1>
            </div><!-- .container -->

            <div class="landing-text">
                <div class="container">
                    <p>
                        Keep track of items you've given away. <br />
                        Add your friends and family to your own registry. <br />
                        Your gift reminder right there in your pocket. <br />
                    </p>
                    <p>High Life paleo fixie mustache, skateboard trust fund leggings Kickstarter asymmetrical Pitchfork jean shorts single-origin coffee chambray mumblecore Brooklyn. Actually roof party polaroid PBR distillery Shoreditch DIY chambray Intelligentsia, stumptown leggings. DIY authentic pickled 90's quinoa. Kogi Blue Bottle Brooklyn yr, sustainable kale chips photo booth disrupt ethical pug ennui Kickstarter. Quinoa roof party four dollar toast put a bird on it. Health goth 3 wolf moon slow-carb readymade umami Odd Future. Pop-up swag fanny pack, Marfa photo booth fap ennui food truck.</p>
                    <h3 class="text-center call">Not registered yet?</h3>
                    <div class="btn-container">
                        <a href="#sign-up" class="btn btn-lg btn-success btn-block">SIGN UP NOW</a>
                    </div><!-- .btn-container -->
                </div><!-- .container -->
            </div><!-- .landing-text -->
        </div><!-- .landing-section -->
    </div><!-- .section-wrapper -->

    <div id="sign-up" class="section-wrapper">
        <div class="sign-up-section">
            <div class="container">
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
    </div><!-- .section-wrapper -->
    
<?php } ?>

<!-- FOOTER -->
<?php 

require_once('footer.php');

?>
</div><!-- .index-wrapper -->


