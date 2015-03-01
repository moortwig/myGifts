<?php 

require_once('header.php');

?>
<div class="main">
    <?php
    // Display this section if a user is logged in
    if(isset($_SESSION['username'])) { ?>

        <h2>Add item</h2>
        <div class="add-item">
            <!--    TODO adjust this for the new structure!  -->
            <form class="form-horizontal" method="post" action="app.php" role="form">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Name" /><br />
                <label for="description">Description:</label><br />
                <textarea name="description" class="form-control"></textarea>
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
                <input type="submit" class="" name="addItem" value="Submit" />
            </form>
        </div><!-- .add-item -->
    <?php } else { ?>
        <h2>Hold!</h2>
        <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
    <?php } ?>
</div><!-- .main -->


<!-- FOOTER -->
<?php 

require_once('footer.php');

?>