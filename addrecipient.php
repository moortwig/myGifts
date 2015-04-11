<?php 

require_once('header.php');

?>
<div class="wrapper add-recipient-page">
    <div class="container">
        <?php
        // Display this section if a user is logged in
        if(isset($_SESSION['username'])) { ?>
            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                    <p class="">
                        Add a new recipient and save them to your account. Or you could save and continue to register a new gift!
                    </p>
                    <form class="form-horizontal" method="post" action="app.php" role="form">
                        <h2>Add recipient</h2>
                        <label for="inputName" class="sr-only">Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" /><br />
                        <label for="inputInformation" class="sr-only">Information:</label><br />
                        <textarea name="information" class="form-control" placeholder="Information"></textarea>
                        <!-- TODO Maybe a better way to pass on the session user ID? -->
                        <!-- YES! THERE IS!!! Besides, the row below isn't even working ...
                        Read THIS: http://www.clfsrpm.net/csrf/ -->
                        <!-- <input name="userId" type="hidden" value=<?php /*echo "'". $_SESSION['userId'] . "'" */?> /> -->
                        <!-- TODO remove this field with dummy data -->
                        <input name="userId" type="hidden" value="5" />

                        <br />
                        <!-- buttons: -->
                        <!-- TODO jQuery on click clear form
                        <input type="submit" class="button" name="clear" value="CLEAR" /> -->

                        <!-- TODO JavaScript check that all fields are filled in: -->
                        <!-- TODO jQuery on key down "Enter" -> Submit -->
                        <button type="submit" class="btn btn-lg btn-success" name="addRecipient"><i class="ton-li-check"></i>Submit</button>
                        <button type="submit" class="btn btn-lg btn-success" name="addRecipientContinue"><span class="glyphicon glyphicon-share-alt"></span> Save and continue</button>
                    </form>
                    <br />
                </div><!-- .col-md-4 col-md-offset-4 -->

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2>Overview <small>So far you've added these people:</small></h2>
                            <div class="nano">
                                <div class="nano-content">
                                    <?php
                                    $recipient = new Recipient();
                                    $userId = 5; // dummy data TODO change this to the session user
                                    $recipients = $recipient->getAllRecipients($userId);

                                    foreach ($recipients as $key => $r) {
                                        $recipientId = $r['id'];
                                        echo "<div class='data-row'>";
                                            echo "<a href='recipient.php?id=" . $r['id'] . "'>" . $r['name'] . "</a> ";
                                            echo "<a href='editrecipient.php?id=" . $r['id'] . "'><span class='glyphicon glyphicon-pencil'></span></a> ";
                                        echo "</div>"; ?>
                                    <?php } ?>
                                </div><!-- .nano-content -->
                            </div><!-- .nano-->
                        </div><!-- .panel -->
                    </div><!-- .panel -->
                </div><!-- .col-md-4 -->
        <?php } else { ?>
            <h2>Hold!</h2>
            <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
        <?php } ?>
    </div><!-- .container -->
</div> <!-- .wrapper -->

<!-- FOOTER -->
<?php 

require_once('footer.php');

?>