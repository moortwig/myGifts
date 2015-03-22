<?php 

require_once('header.php');

?>

<!-- MAIN BODY -->
<div class="main">
   
    <br />
    <br />
    <?php
    
    if(isset($_SESSION['username'])) { 
        // Display this section if a user is logged in ?>
        <div class="user-menu">
            <a href="addrecipient.php"><h3>Add recipient</h3></a>
            <a href="additem.php"><h3>Add item</h3></a>
            <a href="addgift.php"><h3>Add gift</h3></a>
        </div>
    <?php } else {
    // Display this section if noone has logged in yet! ?>
    <div class="container">
        <form class="form-signin" method="post" action="app.php" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
                <label for="inputUsername" class="sr-only">Username</label>
                <input type="text" name="user" placeholder="Username" class="form-control" />
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="pass" placeholder="Password" class="form-control" />
            <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">Log in</button>
        </form>
        </div><!-- .container -->
        
    <?php } ?>

</div><!-- .main -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>
