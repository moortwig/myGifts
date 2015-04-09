<?php

require_once('header.php');

?>
<div class="wrapper edit-item-page">
	<div class="container">
    <?php
    // Display this section if a user is logged in
    // TODO EDIT FORM 
    if(isset($_SESSION['username'])) { ?>
    	<?php
    	$item = new Item();
    	$itemId = $_GET["id"]; // picks up the id from the URL

    	$name = $item->getItem($itemId)['name'];
    	$description = $item->getItem($itemId)['description'];

    	// Check that data isn't null
    	if ($name && $description !== NULL) { ?>
        	<div class="row">
            	<div class="col-md-4 col-md-offset-2">
    				<h2>Edit Item</h2> 
		            <!--    TODO adjust this for the new structure!  -->
		            <form class="form-horizontal" method="post" action="app.php" role="form">
		                <label for="name">Name:</label>
		                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" /><br />
		                <label for="Description">Description:</label><br />
		                <textarea name="description" class="form-control"><?php echo $description; ?></textarea>
		                <!-- TODO Maybe a better way to pass on the session user ID? -->
		                <!-- YES! THERE IS!!! Besides, the row below isn't even working ...
		                Read THIS: http://www.clfsrpm.net/csrf/ -->
		                <!-- <input name="userId" type="hidden" value=<?php /*echo "'". $_SESSION['userId'] . "'" */?> /> -->
		                <!-- TODO remove this field with dummy data -->
		                <input name="userId" type="hidden" value="5" />
		                <input name="itemId" type="hidden" value="<?php echo $itemId; ?>" />

		                <br />
		                <!-- buttons: -->
		                <!-- TODO jQuery on click clear form
		                <input type="submit" class="button" name="clear" value="CLEAR" /> -->

		                <!-- TODO JavaScript check that all fields are filled in: -->
		                <!-- TODO jQuery on key down "Enter" -> Submit -->
		                <button type="submit" class="btn btn-danger" name="deleteItem">Delete</button>
		            	<a href="profile.php" class="btn btn-warning">Cancel</a>
		                <button type="submit" class="btn btn-success" name="editItem">Save</button>
		            </form>

            		<br />
        		</div><!-- .col-md-4 col-md-offset-4 -->

        		<div class="col-md-6">
        			<p class="bg-info">
                    	Edit a item here. Click "Cancel" if you change your mind, and want to go back to your profile!
                	</p>
        		</div><!-- .col-md-6 -->
	        </div><!-- row -->
    	<?php } else {	     
    		// if data is null, redirect to an error page   	
        	header('location: 404.php');
    	}		
    } else { ?>
        <h2>Hold!</h2>
        <p>Access to this content is forbidden. Log in, or sign up and you shall recieve access.</p>
    <?php } ?>
    </div><!-- .container -->
</div> <!-- .main -->

<!-- FOOTER -->
<?php 

require_once('footer.php');

?>