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
        	$recipients = $recipient->getAllRecipients($userId);
           
        	foreach ($recipients as $key => $r) {
                $gift = new Gift();
                $recipientId = $r['id'];
                $gifts = $gift->queryGiftsOnRecipient($recipientId);
                // foreach ($gifts as $gift => $g) {
                //     var_dump($g['id']);
                //     die('remove');
                // }
                
                echo "<div class='data-row'>"; 
                    echo "<div class='data-field'>";
                        echo "<a href='recipient.php?id=" . $r['id'] . "'>" . $r['name'] . "</a> ";
                        // echo $r['name'];
                    echo "</div>";
                    echo "<div class='data-field'>";
                        echo $r['information'];
                    echo "</div>";
                    echo "<div class='data-edit'>";
                        echo "<a href='editrecipient.php?id=" . $r['id'] . "'>Edit</a> ";   
                    echo "</div>";
                echo "</div>"; ?>                
        	<?php } ?>            
        </div><!-- .recipients -->

        <div class="items">
            <h2>Items</h2> 
            <?php
            $item = new Item();
            $userId = 5; // dummy data TODO change this to the session user
            $items = $item->getAllItems($userId);
           
            foreach ($items as $key => $i) {
                echo "<div class='data-row'>"; 
                    echo "<div class='data-field'>";
                        echo $i['name'];
                    echo "</div>";
                    echo "<div class='data-field'>";
                        echo $i['description'];
                    echo "</div>";
                    echo "<div class='data-edit'>";
                        echo "<a href='edititem.php?id=" . $i['id'] . "'>Edit</a> ";   
                    echo "</div>";
                echo "</div>"; ?>                
            <?php } ?>
            
        </div><!-- .items -->

    <?php } else { ?>
        <h2>Hold!</h2>
        <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
    <?php } ?>
</div> <!-- .main -->

<!-- FOOTER -->
<?php 

require_once('footer.php');

?>