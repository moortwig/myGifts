<?php

require_once('header.php');

?>
<div class="main">
    <?php
    // Display this section if a user is logged in
    if(isset($_SESSION['username'])) { ?>
		<div class="recipients">
        	<h2>Recipients</h2> 
        	<?php
        	$recipient = new Recipient();
        	$userId = 5; // dummy data TODO change this to the session user
        	$recipients = $recipient->getAllRecipients($userId); ?>

        	<?php 
        	foreach ($recipients as $key => $recipient) {
                echo "<div class='data-row'>";
                    echo "<div class='data-field'>" . utf8_encode($recipient['name']) . "</div>";
                    echo "<div class='data-field'>" . utf8_encode($recipient['information']) . "</div>";
                    echo "<input type='submit' class='' name='editRecipient' value='Edit' />";
                echo "</div>";
        	}
        	?>
            
        </div><!-- .recipients -->

    <?php } else { ?>
        <h2>Hold!</h2>
        <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
    <?php } ?>
</div> <!-- .main -->