<?php 

require_once('header.php');

?>
<div class="main">
    <?php
    // Display this section if a user is logged in
    if(isset($_SESSION['username'])) { ?>

        <h2>Add recipient</h2>
        <div id="addRecipientForm">
            <!--    TODO adjust this for the new structure!  -->
            <form class="form-horizontal" method="post" action="app.php" role="form">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Name" /><br />
                <label for="Information">Information:</label><br />
                <textarea name="information" class="form-control"></textarea>
                <!-- TODO Maybe a better way to pass on the session user ID? -->
                <input name="user_id" type="hidden" value="<?php $_SESSION['userId'] ?>" />
                <br />
                <!-- buttons: -->
                <!-- TODO jQuery on click clear form
                <input type="submit" class="button" name="clear" value="CLEAR" /> -->

                <!-- TODO JavaScript check that all fields are filled in: -->
                <!-- TODO jQuery on key down "Enter" -> Submit -->
                <input type="submit" class="" name="addRecipient" value="Submit" />
            </form>
        </div><!-- #addRecipientForm -->
    <?php } else { ?>
        <h2>Hold!</h2>
        <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
    <?php } ?>
</div> <!-- .main -->