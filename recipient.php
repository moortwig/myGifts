<?php

require_once('header.php');

?>
<div class="main">
    <?php
    // Display this section if a user is logged in
    if(isset($_SESSION['username'])) { 
    	$userId = 5; // DUMMY DATA, CHANGE THIS ...
		$recipient = new Recipient();

		$recipientId = $_GET["id"]; // picks up the id from the URL
		$recipient = $recipient->getRecipient($recipientId);
		$recipientName = $recipient['name'];
		$recipientInformation = $recipient['information'];

		$gift = new Gift();

		$giftsArray = $gift->getAllGiftsAsMultiArray($recipientId, $userId); ?>

		<!-- STUFF HERE -->
		<div class="recipient">
			<div class="gift-history">
			
				<h2>Profile For <?php echo $recipientName; ?></h2>
				<?php echo "<a href='editrecipient.php?id=" . $recipientId . "'><div class='button'>Edit</div></a> "; ?>
				<?php echo $recipientInformation;
				 ?>

				<h3>Gift History</h3>

				<?php				
				if (!$giftsArray) {
					echo "There's no gift history to display yet!";
				} else {
					foreach ($giftsArray as $singleGift => $single) {
						echo $single['item_id']['name'] . ", ";
						echo $single['item_id']['description'] . ", ";
						echo $single['occasion'] . ", ";
						echo $single['added'] . "<br />";
					}
				} ?>

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


