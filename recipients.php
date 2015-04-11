<?php 

require_once('header.php');

?>
<div class="main container">
    <?php
    // Display this section if a user is logged in
    if(isset($_SESSION['username'])) { ?>
                   
        <h2>Overview <small>So far you've added these people:</small></h2> 
        <?php
        $recipient = new Recipient();
        $userId = 5; // dummy data TODO change this to the session user
        $recipients = $recipient->getAllRecipients($userId);
       
        foreach ($recipients as $key => $r) {
            $recipientId = $r['id'];
                            
            echo "<div class='data-row'>"; 
                // echo "<div class='data-field'>";
                    echo "<a href='recipient.php?id=" . $r['id'] . "'>" . $r['name'] . "</a> ";
                    // echo $r['name'];
                // echo "</div>";
                /*echo "<div class='data-field'>";
                    echo $r['information'];
                echo "</div>";*/
                // echo "<div class='data-edit'>";
                    echo "<a href='editrecipient.php?id=" . $r['id'] . "'><span class='glyphicon glyphicon-pencil'></span></a> ";
                    // echo "<a class='btn btn-default btn-xs' href='editrecipient.php?id=" . $r['id'] . "'>Edit</a> ";
                // echo "</div>";
            echo "<hr />";
            echo "</div>"; ?>      
        <?php } ?>
    <?php } else { ?>
        <h2>Hold!</h2>
        <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
    <?php } ?>
</div> <!-- .main -->

<!-- FOOTER -->
<?php 

require_once('footer.php');

?>