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
            <div class="container-small-centered"><!-- nav-stacked -->
                <ul class="nav-pills-md nav-pills ">
                    <li><a href="addrecipient.php" class="btn btn-info btn-lg">Add recipient</a></li>
                    <li><a href="additem.php" class="btn btn-info btn-lg">Add item</a></li>
                    <li><a href="addgift.php" class="btn btn-info btn-lg">Add gift</a></li>
                </ul>
            </div>
        </div><!-- .container -->

    <?php } else {

    // Display this section if user has not logged in ?>
    <div class="container">
        <form class="form-signin" method="post" action="app.php" role="form">
            <h2 class="form-signin-heading">Please log in</h2>
            <label for="inputUsername" class="sr-only">Username</label>
            <input type="text" name="user" placeholder="Username" class="form-control" />
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="pass" placeholder="Password" class="form-control" />
            <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">LOG IN</button>
            <br />
            <h4 class="form-signin-heading">Not registered yet?</h4><a href="signup.php" class="btn btn-lg btn-success btn-block">SIGN UP NOW</a>
        </form>

        </div><!-- .container -->
        
    <?php } ?>

</div><!-- .main -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>
