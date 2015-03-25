<?php 

require_once('header.php');

?>
<div class="main container">
    <?php
    // Display this section if a user is logged in
    if(isset($_SESSION['username'])) { ?>
        <?php
		$userId = 5; // TODO change this to a safe get user id
		$item = new Item();
		$items = $item->getAllItems($userId);

		$recipient = new Recipient();
		$recipients = $recipient->getAllRecipients($userId);
		// $itemId = $items['id'];
		// foreach ($items as $item => $i) {
		// 	echo $i['name'];
		// }
		/*var_dump($item);*/
		// die(' remove');
		?>
        <div class="row">
            <h2>Add Gift</h2>
            <div class="col-md-4">
                <form class="form-horizontal" method="post" action="app.php" role="form">
                    <h3>1: Choose recipient(s)</h3>
                    <label for="Recipient">Recipient:</label>
                    <?php
                    // TODO even better would be to make an input text field and to filter the input text, as if with Angular
                    foreach ($recipients as $recipient => $r) { ?>
                        <ul>
                        <li><input type="checkbox" name="recipientId[]" value="<?php echo $r['id']; ?>">
                            <?php echo $r['name']; ?>
                        </input></li>
                        </ul>
                    <?php } ?><br />
                    
                </div>
                <div class="col-md-4">
                    <h3>2: Choose item</h3>
                    <label for="Item">Item:</label>
                    <select name="itemId">
                        <?php
                        foreach ($items as $item => $i) { ?>
                            <option value="<?php echo $i['id']; ?>">
                                <?php echo $i['name']; ?>
                            </option>
                        <?php } ?>
                    </select><br />
                </div>
                <div class="col-md-4">
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