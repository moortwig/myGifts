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
        	/* TODO:
        	- $_GET thingy?? 
			- Get a specific recipient
			- Make a form
			

			*/
        	$recipient = new Recipient();
        	$userId = 5; // dummy data TODO change this to the session user
        	$recipients = $recipient->getAllRecipients($userId); ?>
        	
        	
            
        </div> <!-- .recipients -->

    <?php } else { ?>
        <h2>Hold!</h2>
        <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
    <?php } ?>
</div> <!-- .main -->