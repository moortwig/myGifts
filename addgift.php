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
            <h2>Add Gift</h2>
            <div class="row">
                <form class="form-horizontal" method="post" action="app.php" role="form">
                    <div class="container">
                        <div class="col-md-4 add-gift-column">
                            <h3>1: Create item</h3>
                            <form class="form-horizontal" method="post" action="app.php" role="form">
                                <label for="name" class="sr-only">Name:</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" /><br />
                                <label for="description" class="sr-only">Description:</label><br />
                                <textarea name="description" class="form-control" placeholder="Description"></textarea>
                                <!-- TODO Maybe a better way to pass on the session user ID? -->
                                <!-- YES! THERE IS!!! Besides, the row below isn't even working ...
                                Read THIS: http://www.clfsrpm.net/csrf/ -->
                                <!-- <input name="userId" type="hidden" value=<?php /*echo "'". $_SESSION['userId'] . "'" */?> /> -->
                                <!-- TODO remove this field with dummy data -->
                                <input name="userId" type="hidden" value="5" />
                                <br />
                                <!-- buttons: -->
                                <!-- TODO jQuery on click clear form
                                <input type="submit" class="button" name="clear" value="CLEAR" /> -->

                                <!-- TODO JavaScript check that all fields are filled in: -->
                                <!-- TODO jQuery on key down "Enter" -> Submit -->
                                <button type="submit" class="btn btn-md btn-success" name="addItem"><i class="ton-li-check"></i>Save item</button>
                                <!-- <button type="submit" class="btn btn-md btn-success" name="addItemContinue"><span class="glyphicon glyphicon-share-alt"></span>Save and continue</button> -->
                        </form>


                            <!-- <label for="Item" class="sr-only">Item:</label>
                            <select name="itemId">
                                <?php
                                /*foreach ($items as $item => $i) { ?>
                                    <option value="<?php echo $i['id']; ?>">
                                        <?php echo $i['name'];*/ ?>
                                    </option>
                                <?php /*}*/ ?>
                            </select> -->
                            <!-- <p class="help-block">Don't have what you need?</p>
                            <a class="btn btn-sm btn-primary" href="additem.php">Add new item</a> -->
                        </div><!-- .col-md-4 add-gift-column -->

                        <div class="col-md-4 add-gift-column middle-column">
                            <h3>2: Choose recipient(s)</h3>
                            <div id="add-gift-recipients" class="nano">
                                <div class="nano-content">
                                    <label for="Recipient">Recipient:</label>
                                    <?php
                                    foreach ($recipients as $recipient => $r) { ?>
                                        <ul class="list-unstyled">
                                        <li><input type="checkbox" name="recipientId[]" value="<?php echo $r['id']; ?>">
                                            <?php echo $r['name']; ?>
                                        </input></li>
                                        </ul>
                                    <?php } ?>
                                    <!-- <p class="help-block">Missing someone?</p>
                                    <a class="btn btn-sm btn-primary" href="addrecipient.php">Add someone!</a> -->
                                </div><!-- .nano-content -->
                            </div><!-- #add-gift-recipients nano-->
                        </div>

                        <div class="col-md-4 add-gift-column">
                            <h3>3: Write down the occasion</h3>
                            <label for="Occasion">Occasion:</label>
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
                        </div><!-- .col-md-4 form-group -->

                    </div><!-- .container -->
                </form>
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