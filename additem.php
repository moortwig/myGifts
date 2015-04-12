<?php 

require_once('header.php');

?>
<div class="wrapper add-item-page">
    <div class="container">
        <?php
        // Display this section if a user is logged in
        if(isset($_SESSION['username'])) { ?>
            <div class="row">
                <div class="col-xs-offset-2 col-md-offset-3 col-xs-8 col-md-4 col-xs-offset-2 col-md-offset-5">
                    <!-- <div class="container"> -->
                        <form class="form-horizontal" method="post" action="app.php" role="form">
                            <h2>Step 1: Add item</h2>

                            <label for="name" class="sr-only">Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" /><br />
                            <label for="description" class="sr-only">Description:</label><br />
                            <textarea name="description" class="form-control" placeholder="Description"></textarea>
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
                            <button type="submit" class="btn btn-md btn-success" name="addItemContinue"><span class="glyphicon glyphicon-share-alt"></span>Continue</button>
                        </form>
                    <!-- </div> -->
                </div><!-- .col-md-4 col-md-offset-4 -->

                <!-- <div class="col-md-6"> 
                    
                </div> --><!-- .col-md-6 -->
            </div><!-- .row -->
        <?php } else { ?>
            <h2>Hold!</h2>
            <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
        <?php } ?>
    </div><!-- .container -->
</div><!-- .wrapper -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>