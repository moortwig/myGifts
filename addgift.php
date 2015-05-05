<?php 

require_once('header.php');

?>
<div class="full-screen add-gift-page">
    <div class="overlay add-gift-section">
        <div class="container">
            <?php
            // Display this section if a user is logged in
            if(isset($_SESSION['username'])) {
                $userId = $_SESSION['userId'];
                
        		$item = new Item();
        		$recipient = new Recipient();
        		?>
                <div class="add-gift-form">
                    <div>
                        <em>
                            You added: 
                            <?php
                            $recipients = $_GET['recipients'];
                            $recipientArray = json_decode($_GET['recipients']);
                            $itemName = $_GET['itemName'];
                            $description = $_GET['description'];

                            echo $itemName . ' to ';
                            foreach ($recipientArray as $key => $recipientId) {
                                $recipientName = $recipient->getRecipient($recipientId)['name'];

                                echo $recipientName;
                                echo ', ';
                            }
                            ?>
                        </em>
                    </div>

                    <h2>3: Name the occasion</h2>
                    <form class="form-horizontal" method="post" action="app.php" role="form">
                        
                        <label for="Occasion" class="sr-only">Occasion:</label>
                        <input type="text" name="occasion" class="form-control" placeholder="Occasion" required /><br />
                        <input name="userId" type="hidden" value=<?php echo "'". $_SESSION['userId'] . "'" ?> />
                        <input name="itemName" type="hidden" value="<?php echo $itemName ?>" required />
                        <input name="description" type="hidden" value="<?php echo $description ?>" required />
                        <input name="recipients" type="hidden" value="<?php echo htmlspecialchars($recipients) ?>" required />

                        <button type="submit" class="btn btn-md btn-success" name="addGift">I'm all done!</button>

                    </form>
                </div><!-- .add-gift-form -->
            <?php } else { ?>
                <h2>Hold!</h2>
                <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
            <?php } ?>
        </div><!-- .container -->
    </div><!-- .add-gift-section -->
</div><!-- .add-gift-page -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>