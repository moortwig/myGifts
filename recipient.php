<?php

require_once('header.php');

?>
<div class="main">
    <?php
    // queryGiftsOnRecipient($recipientId)
    // Display this section if a user is logged in
    if(isset($_SESSION['username'])) { ?>
		<!-- STUFF HERE -->

        

    <?php } else { ?>
        <h2>Hold!</h2>
        <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
    <?php } ?>
</div> <!-- .main -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>


