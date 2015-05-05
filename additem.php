<?php 

require_once('header.php');

?>
<div class="full-screen add-item-page">
    <div class="overlay add-item-section">
        <div class="container">
            <?php
            // Display this section if a user is logged in
            if(isset($_SESSION['username'])) { ?>
                <div class="add-item-form">
                    <form class="form-horizontal" method="post" action="app.php" role="form">
                        <h2>Step 1: Add item</h2>

                        <label for="itemName" class="sr-only">Item:</label>
                        <input type="text" name="itemName" class="form-control" placeholder="Item" required/><br />
                        <label for="description" class="sr-only">Description:</label><br />
                        <textarea name="description" class="form-control" placeholder="Description"></textarea>
                        <input name="userId" type="hidden" value=<?php echo "'". $_SESSION['userId'] . "'" ?> />

                        <br />
                    
                        <button type="submit" class="btn btn-md btn-success" name="addItemContinue"><span class="glyphicon glyphicon-share-alt"></span>Continue</button>
                    </form>
                </div><!-- .add-item-form -->
            <?php } else { ?>
                <h2>Hold!</h2>
                <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
            <?php } ?>
        </div><!-- .container -->
    </div> <!-- .add-item-section -->
</div><!-- .add-item-page -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>