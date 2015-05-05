<?php

require_once('header.php');

?>
<div class="full-screen edit-recipient-page">
    <div class="overlay edit-recipient-section">
		<div class="container">
		    <?php
		    // Display this section if a user is logged in
		    if(isset($_SESSION['username'])) {
                $userId = $_SESSION['userId'];
				
				$recipient = new Recipient();
				$recipientId = $_GET["id"]; // picks up the id from the URL

				// get recipient name and information
				$name = $recipient->getRecipient($recipientId)['name'];
				$information = $recipient->getRecipient($recipientId)['information'];

				// Check that data isn't null
				if ($name && $information !== NULL) { ?>
			        <form class="form-horizontal edit-recipient-form" method="post" action="app.php" role="form">
						<h2>Edit Recipient</h2> 
			            <label for="name">Name:</label>
			            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" /><br />
			            <label for="Information">Information:</label><br />
			            <textarea name="information" class="form-control"><?php echo $information; ?></textarea>
			            <input name="recipientId" type="hidden" value="<?php echo $recipientId; ?>" />

			            <br />

			            <button type="submit" class="btn btn-danger" name="deleteRecipient">Delete</button>
			        	<a href="recipients.php" class="btn btn-warning">Cancel</a>
			            <button type="submit" class="btn btn-success" name="editRecipient">Save</button>
			        </form>
				<?php } else {	     
					// if data is null, redirect to an error page   	
					header('location: 404.php');
				} ?>
		    <?php } else { ?>
		        <h2>Hold!</h2>
		        <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
		    <?php } ?>
		</div><!-- .container -->
    </div> <!-- .edit-recipient-section -->
</div> <!-- .edit-recipient-page -->

<!-- FOOTER -->
<?php 

require_once('footer.php');

?>