<?php 

require_once('header.php');

?>
<div class="wrapper add-item-page">
    <div class="container">
        <?php
        // Display this section if a user is logged in
        if(isset($_SESSION['username'])) {
            $userId = 5; // TODO change this to a safe get user id

            $recipient = new Recipient();
            $recipients = $recipient->getAllRecipients($userId);
            ?>
            <div class="row">
                <div class="col-xs-offset-2 col-md-offset-3 col-xs-8 col-md-4 col-xs-offset-2 col-md-offset-5">
                    <div class="item">
                        <?php /* if(isset($_SESSION['item'])) { */
                            // echo $_SESSION['item'];
                            // $item = new Item();
                            $itemName = $_GET['itemName']; // picks up the name from the URL
                            // var_dump($itemName); // GER SAMTLIGA ORD
                            // die('remove');
                            $description = $_GET['description']; // picks up the description from the URL

                            // $name = $item->getItem($itemId)['name'];
                            // $description = $item->getItem($itemId)['description']; ?>

                            <em>You added: 
                            <?php echo htmlspecialchars($itemName) . " - " . htmlspecialchars($description); ?>
                            </em>
                        <?php /* } */ ?>
                    </div>
                    <!-- <div class="container"> -->
                    <form class="form-horizontal" method="post" action="app.php" role="form">
                        <h3>Step 2: Choose recipient(s)</h3>
                        <div id="add-gift-recipients" class="nano">
                            <div class="nano-content">
                                <label for="Recipient">Recipient:</label>
                                <?php
                                foreach ($recipients as $recipient => $r) { ?>
                                    <ul class="list-unstyled">
                                    <li><input type="checkbox" name="recipientId[]" value="<?php echo htmlspecialchars($r['id']); ?>">
                                        <?php echo $r['name']; ?>
                                    </input></li>
                                    </ul>
                                <?php } ?>

                                <!-- <p class="help-block">Missing someone?</p>
                                <a class="btn btn-sm btn-primary" href="addrecipient.php">Add someone!</a> -->
                                <input name="itemName" type="hidden" value="<?php echo $itemName; ?>" />
                                <input name="description" type="hidden" value="<?php echo $description; ?>" />
                            </div><!-- .nano-content -->
                        </div><!-- #add-gift-recipients nano -->

                        <button type="submit" class="btn btn-md btn-success" name="chooseRecipient"><span class="glyphicon glyphicon-share-alt"></span>Continue</button>
                        <!-- <button type="submit" class="btn btn-md btn-success" name="storeRecipient"><span class="glyphicon glyphicon-share-alt"></span>Continue</button> -->
                    </form>
                    <!-- </div> -->
                </div><!-- .col-md-4 col-md-offset-4 -->

                <!-- <div class="col-md-6"> 
                    
                </div> --><!-- .col-md-6 -->
            </div><!-- .row -->
        <?php } else { ?>
            <h2>Hold!</h2>
            <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
        <?php } ?>
    </div><!-- .container -->
</div><!-- .wrapper -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>