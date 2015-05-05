<?php 

require_once('header.php');

?>
<div class="full-screen add-recipient-page">
    <div class="overlay add-recipient-section">
        <div class="container">
            <?php
            // Display this section if a user is logged in
            if(isset($_SESSION['username'])) { ?>
                <div class="row">
                    <div class="col-sm-5 col-lg-4 col-lg-offset-2">
                        <div class="add-recipient-form">
                            <form class="form-horizontal" method="post" action="app.php" role="form">
                                <h2>Add recipient</h2>
                                <label for="inputName" class="sr-only">Name:</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" required /><br />
                                <label for="inputInformation" class="sr-only">Information:</label><br />
                                <textarea name="information" class="form-control" placeholder="Information"></textarea>
                                <input name="userId" type="hidden" value=<?php echo "'". $_SESSION['userId'] . "'" ?> />

                                <br />

                                <button type="submit" class="btn btn-sm btn-success" name="addRecipient"><i class="ton-li-check"></i>Submit</button>
                            </form>
                        </div>
                        <br />
                    </div><!-- .col-sm-5 col-lg-4 col-lg-offset-2 -->

                    <div class="col-sm-7 col-lg-6">
                         <div class="overview-container">
                            <h2>Overview</h2>
                            <span>So far you've added these people:</span>
                            <div class="nano">
                                <div class="nano-content">
                                    <?php
                                    $recipient = new Recipient();
                                    $userId = $_SESSION['userId'];
                                    $recipients = $recipient->getAllRecipients($userId);

                                    foreach ($recipients as $key => $r) {
                                        $recipientId = $r['id'];
                                        echo "<div class='data-row'>";
                                            echo "<a href='recipient.php?id=" . $r['id'] . "'>" . $r['name'] . "</a> ";
                                        echo "</div>"; ?>
                                    <?php } ?>
                                </div><!-- .nano-content -->
                            </div><!-- .nano-->
                        </div><!-- .overview-container -->
                    </div><!-- .col-sm-7 col-lg-6 -->
            <?php } else { ?>
                <h2>Hold!</h2>
                <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
            <?php } ?>
        </div><!-- .container -->
    </div> <!-- .add-recipient-section -->
</div> <!-- .add-recipient-page -->

<!-- FOOTER -->
<?php 

require_once('footer.php');

?>