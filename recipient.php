<?php

require_once('header.php');

?>
<div class="wrapper recipient-page">
	<div class="container">
	    <?php
	    // Display this section if a user is logged in
	    if(isset($_SESSION['username'])) { 
	    	$userId = 5; // DUMMY DATA, CHANGE THIS ...
			$recipient = new Recipient();

			$recipientId = $_GET["id"]; // picks up the id from the URL
			$recipient = $recipient->getRecipient($recipientId);

			if($recipient) {
				$recipientName = $recipient['name'];
				$recipientInformation = $recipient['information'];

				$gift = new Gift();

				$giftsArray = $gift->getAllGiftsAsMultiArray($recipientId, $userId); ?>

				<!-- STUFF HERE -->
	        	<div class="row">

	            	<div class="col-md-4 col-md-offset-2">					
						<h2>Profile For <?php echo $recipientName; ?></h2>
						<?php echo $recipientInformation;
						 ?>
						 <br />
						<?php echo "<a href='editrecipient.php?id=" . $recipientId . "' class='btn btn-xs btn-success'>Edit</a> "; ?>
					</div><!-- .col-md-4 col-md-offset-2 -->

					<div class="col-md-6">
						<h3>Gift History</h3>

						<?php				
						if (!$giftsArray) {
							echo "There's no gift history to display yet!";
						} else {
							foreach ($giftsArray as $singleGift => $single) {
								echo $single['item_id']['name'] . ", ";
								echo $single['item_id']['description'] . ", ";
								echo $single['occasion'] . "<br />";
								// echo $single['added'] . "<br />";
							}
						} ?>
		        	</div><!-- .col-md-6 -->

		        </div><!-- .row -->
		    <?php } else {
		    	// if data is null, redirect to an error page   	
        	header('location: 404.php');
		    }
	    } else { ?>
	        <h2>Hold!</h2>
	        <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
	    <?php } ?>
    </div><!-- .container -->
</div> <!-- .wrapper -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>


