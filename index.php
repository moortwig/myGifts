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
            <div class="container">
                <div class="news-section">
                    <h2>News</h2>
                    <p>This version is a beta, and not all features are unlocked yet. Expect there to be more, as the work progresses!</p>
                </div><!-- .news-section -->

                <div class="instructions-section">
                    <h2>Instructions</h2>
                    <dl>

                        <dt>Add gift</dt>
                        <dd>To add a gift, click the gift box icon on the top bar menu. You'll then start off by creating a new item. Click "Continue", once you've filled in the form, to move on to choosing one or several recipient(s). If you can't find the right person in your list, you'll need to add them first. Please see below, how to add a recipient. Lastly, specify the occasion for the gift.</dd>

                        <dt>View your stored recipients</dt>
                        <dd>Click the people icon to view a list of recipients</dd>

                        <dt>Gift history</dt>
                        <dd>You'll find a list of items previously registered, when clicking recipients individually. Every item assigned as a gift on that person, shows up in the list.</dd>

                        <dt>Add recipient</dt>
                        <dd>Viewing your list of recipients, you can click the button with the plus sign to add a new person.</dd>

                        <dt>Edit</dt>
                        <dd>You can edit certain data, such as recipients and items. Simply go to your recipient or item list, and click the pen icon next to the name. You can now edit or delete it.</dd>

                        <dt>Delete</dt>
                        <dd>You can delete recipients while you're in edit mode. See about for instructions on edit.</dd>

                    </dl>
                </div><!-- .instructions-section -->
            </div><!-- .container -->
        </div><!-- .welcome -->
    <?php } else {
     // Display this section if user has not logged in ?>
    <div class="section-wrapper">
        <div class="landing-section">
            <div class="container">
                <h1 class="text-center"><span class="landing-headline">Your gift reminder right there, in your pocket.</span></h1>
            </div><!-- .container -->

            <div class="landing-text">
                <div class="container">
                    <p>
                        Keep track of items you've given away. <br />
                        Add your friends and family to your own registry. <br />
                        Free to use!<br />
                    </p>
                    <p>High Life paleo fixie mustache, skateboard trust fund leggings Kickstarter asymmetrical Pitchfork jean shorts single-origin coffee chambray mumblecore Brooklyn. Actually roof party polaroid PBR distillery Shoreditch DIY chambray Intelligentsia, stumptown leggings. DIY authentic pickled 90's quinoa. Kogi Blue Bottle Brooklyn yr, sustainable kale chips photo booth disrupt ethical pug ennui Kickstarter. Quinoa roof party four dollar toast put a bird on it. Health goth 3 wolf moon slow-carb readymade umami Odd Future. Pop-up swag fanny pack, Marfa photo booth fap ennui food truck.</p>
                    <h3 class="text-center call">Not registered yet?</h3>
                    <div class="btn-container">
                        <a href="#sign-up" data-scroll class="btn btn-lg btn-success btn-block">SIGN UP NOW</a>
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

</div><!-- .index-wrapper -->
<!-- FOOTER -->
<?php 

require_once('footer.php');

?>


