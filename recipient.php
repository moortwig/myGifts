<?php

require_once('header.php');

?>
<div class="main">
    <?php
    // queryGiftsOnRecipient($recipientId)
    // Display this section if a user is logged in
    if(isset($_SESSION['username'])) { 
		$recipient = new Recipient();
		$recipientId = $_GET["id"]; // picks up the id from the URL
		$gift = new Gift();
		$gifts = $gift->queryGiftsOnRecipient($recipientId);
		var_dump($gifts);
		die('remove');?>

		<!-- STUFF HERE -->
		<div class="recipient">
			<div class="gift-history">
				<!-- TODO: display recipient name below inside h2 and h3: -->
				<h2>Profile For X</h2>
				<!-- TODO Move detailed info from profile.php on the recipient, to here -->
				<h3>Gift History for X</h3>
				<?php
				// TODO:
				// Display Item name, Item description, Gift occasion, Gift added
	        	?>
        	</div><!-- .gift-history -->
        </div><!-- .recipient -->


    <?php } else { ?>
        <h2>Hold!</h2>
        <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
    <?php } ?>
</div> <!-- .main -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>


