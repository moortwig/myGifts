<?php

require_once('header.php');

?>
<div class="full-screen recipient-page">
	<div class="overlay recipient-section">
		<div class="container">
		    <?php
		    // Display this section if a user is logged in
		    if(isset($_SESSION['username'])) { 
		    	$userId = $_SESSION['userId'];
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
		            	<div class="col-xs-12 col-sm-5 col-sm-offset-1">
			        		<div class="recipient-container">					
								<h2>Profile For: <?php echo $recipientName; ?></h2>
								<?php echo $recipientInformation;
								 ?>
								 <br />
								<?php echo "<a href='editrecipient.php?id=" . $recipientId . "' class='btn btn-success'><span class='glyphicon glyphicon-pencil'></span>Edit</a> "; ?>
							</div><!-- .recipient-container -->
						</div><!-- .col-xs-12 col-sm-5 col-sm-offset-1 -->

						<div class="col-xs-12 col-sm-6">
							<div class="recipient-container">	
								<h3>Gift History</h3>

								<?php				
								if (!$giftsArray) {
									echo "There's no gift history to display yet!";
								} else { ?>
									<div class="nano">
										<div class="nano-content">
											<dl>
												<?php foreach ($giftsArray as $singleGift => $single) {
													echo "<dt>";
														echo $single['item_id']['name'] . " - ";
														echo $single['occasion'];
													echo "</dt>";
													echo "<dd>";
														echo $single['item_id']['description'];
													echo "</dd>";
												} ?>
											</dl>
										</div><!-- .nano-content -->
									</div><!-- .nano -->
								<?php } ?>
							</div><!-- .recipient-container -->
			        	</div><!-- .col-xs-12 col-sm-6 -->

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
    </div><!-- .recipients-section -->
</div> <!-- .recipient-page -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>


