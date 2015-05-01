<?php 

require_once('header.php');

?>
<div class="choose-recipient-page">
    <div class="choose-recipient-section">
        <div class="choose-container">
            <?php
            // Display this section if a user is logged in
            if(isset($_SESSION['username'])) {
                $userId = $_SESSION['userId'];
                // $userId = 5; // TODO change this to a safe get user id

                $recipient = new Recipient();
                $recipients = $recipient->getAllRecipients($userId);
                ?>
                        
                <div class="item">
                    <?php $itemName = $_GET['itemName']; // picks up the name from the URL
                    $description = $_GET['description']; // picks up the description from the URL ?>

                    <em>You added: 
                    <?php echo htmlspecialchars($itemName) . " - " . htmlspecialchars($description); ?>
                    </em>
                </div>
                <form class="form-horizontal" method="post" action="app.php" role="form">
                    <h3>Step 2: Choose recipient(s)</h3>
                    <div id="add-gift-recipients" class="nano">
                        <div class="nano-content">
                            <?php

                    if ($recipients == NULL) {
                        echo "<span class='error'>" . nl2br("You haven't added any recipients yet!\n Please click below to add them. \n" . "</span>");
                        // echo "";
                        echo "<a href='addrecipient.php' class='btn btn-info'>Add recipient</a>";
                    } else {
                    ?>
                            <label for="Recipient">Recipient:</label>
                            <?php
                            foreach ($recipients as $recipient => $r) { ?>
                                <ul class="list-unstyled">
                                <li><input type="checkbox" name="recipientId[]" value="<?php echo htmlspecialchars($r['id']); ?>" />
                                    <?php echo $r['name']; ?>
                                </input></li>
                                </ul>
                            <?php } ?>

                            <!-- <p class="help-block">Missing someone?</p>
                            <a class="btn btn-sm btn-primary" href="addrecipient.php">Add someone!</a> -->
                            <input name="itemName" type="hidden" value="<?php echo $itemName; ?>" required />
                            <input name="description" type="hidden" value="<?php echo $description; ?>" required />
                        </div><!-- .nano-content -->
                    </div><!-- #add-gift-recipients nano -->

                    <button type="submit" class="btn btn-md btn-success" name="chooseRecipient"><span class="glyphicon glyphicon-share-alt"></span>Continue</button>
                    <?php } ?>
                    <!-- <button type="submit" class="btn btn-md btn-success" name="storeRecipient"><span class="glyphicon glyphicon-share-alt"></span>Continue</button> -->
                </form>
            <?php } else { ?>
                <h2>Hold!</h2>
                <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
            <?php } ?>
        </div><!-- .container -->
    </div><!-- .choose-recipient-section -->
</div><!-- .choose-recipient-page -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>