<?php

require_once('header.php');

?>
<div class="main">
    <?php
    // Display this section if a user is logged in
    // TODO EDIT FORM 
    if(isset($_SESSION['username'])) { ?>
		<div class="recipients">
        	<h2>Edit Recipient</h2> 
        	<?php

        	$recipient = new Recipient();
        	$recipientId = $_GET["id"]; // picks up the id from the URL

        	$name = $recipient->getRecipient($recipientId)['name'];
        	$information = $recipient->getRecipient($recipientId)['information'];

        	// Check that data isn't null
        	if ($name && $information !== NULL) { ?>
        		<div id="editRecipientForm">
		            <!--    TODO adjust this for the new structure!  -->
		            <form class="form-horizontal" method="post" action="app.php" role="form">
		                <label for="name">Name:</label>
		                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" /><br />
		                <label for="Information">Information:</label><br />
		                <textarea name="information" class="form-control"><?php echo $information; ?></textarea>
		                <!-- TODO Maybe a better way to pass on the session user ID? -->
		                <!-- YES! THERE IS!!! Besides, the row below isn't even working ...
		                Read THIS: http://www.clfsrpm.net/csrf/ -->
		                <!-- <input name="userId" type="hidden" value=<?php /*echo "'". $_SESSION['userId'] . "'" */?> /> -->
		                <!-- TODO remove this field with dummy data -->
		                <input name="userId" type="hidden" value="5" />
		                <input name="recipientId" type="hidden" value="<?php echo $recipientId; ?>" />

		                <br />
		                <!-- buttons: -->
		                <!-- TODO jQuery on click clear form
		                <input type="submit" class="button" name="clear" value="CLEAR" /> -->

		                <!-- TODO JavaScript check that all fields are filled in: -->
		                <!-- TODO jQuery on key down "Enter" -> Submit -->
		                <input type="submit" class="" name="editRecipient" value="Submit" />
		            </form>
	        	</div><!-- #editRecipientForm -->
        	<?php } else {	     
        		// if data is null, redirect to an error page   	
	        	header('location: 404.php');
        	} ?>
            
        </div> <!-- .recipients -->
		
    <?php } else { ?>
        <h2>Hold!</h2>
        <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
    <?php } ?>
</div> <!-- .main -->

<!-- FOOTER -->
<?php 

require_once('footer.php');

?>