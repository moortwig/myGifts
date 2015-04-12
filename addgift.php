<?php 

require_once('header.php');

?>
<div class="wrapper add-gift-page">
    <div class="container">
        <?php
        // Display this section if a user is logged in
        if(isset($_SESSION['username'])) {
    		$userId = 5; // TODO change this to a safe get user id
    		$item = new Item();
    		$items = $item->getAllItems($userId);

    		$recipient = new Recipient();
    		$recipients = $recipient->getAllRecipients($userId);
    		?>
            <div class="row">
                <div class="col-xs-offset-2 col-md-offset-3 col-xs-8 col-md-4 col-xs-offset-2 col-md-offset-5">
                    <h2>3: Name the occasion</h2>
                    <form class="form-horizontal" method="post" action="app.php" role="form">
                        
                            <label for="Occasion" class="sr-only">Occasion:</label>
                            <input type="text" name="occasion" class="form-control" placeholder="Occasion" /><br />
                            <!-- buttons: -->
                            <!-- TODO JavaScript check that all fields are filled in: -->
                            <!-- TODO jQuery on key down "Enter" -> Submit -->

                            <!-- TODO Maybe a better way to pass on the session user ID? -->
                            <!-- YES! THERE IS!!! Besides, the row below isn't even working ...
                            Read THIS: http://www.clfsrpm.net/csrf/ -->
                            <!-- <input name="userId" type="hidden" value=<?php /*echo "'". $_SESSION['userId'] . "'" */?> /> -->
                            <!-- TODO remove this field with dummy data -->
                            <input name="userId" type="hidden" value="5" />
                            <button type="submit" class="btn btn-lg btn-success" name="addGift">I'm all done!</button>

                    </form>
                </div><!-- .col* -->
            </div><!-- .row -->
        <?php } else { ?>
            <h2>Hold!</h2>
            <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
        <?php } ?>
    </div><!-- .container -->
</div><!-- .wrapper  -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>