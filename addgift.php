<?php 

require_once('header.php');

?>
<div class="main">
    <?php
    // Display this section if a user is logged in
    if(isset($_SESSION['username'])) { ?>

        <h2>Add Gift</h2>

		<div class="add-gift">
            <h2>Sign up</h2>
            <form class="form-horizontal" method="post" action="app.php" role="form">
                <label for="Item">Item:</label>
                <input type="text" name="item" class="form-control" placeholder="Item" /><br />
                <label for="Recipient">Recipient:</label>
                <input type="text" name="recipient" class="form-control" placeholder="Recipient" /><br />
                <!-- TODO JavaScript regex password check below: -->
                <!-- <label for="Passwordcheck">Retype password:</label>
                <input type="password" name="pwdCheck" name="" class="form-control" placeholder="Retype password" /><br />-->
                <label for="Occasion">Occasion:</label>
                <input type="text" name="occasion" class="form-control" placeholder="Occasion" /><br />
                <!-- buttons: -->
                <!-- TODO jQuery on click clear form
                <input type="submit" class="button" name="clear" value="CLEAR" /> -->

                <!-- TODO JavaScript check that all fields are filled in: -->
                <!-- TODO jQuery on key down "Enter" -> Submit -->
                <input type="submit" class="" name="addGift" value="Submit" />
            </form>
        </div><!-- .add-gift -->
        <?php } else { ?>
        <h2>Hold!</h2>
        <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
    <?php } ?>
</div><!-- .main -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>