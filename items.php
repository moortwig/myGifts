<?php 

require_once('header.php');

?>
<div class="wrapper recipients">
    <div class="container">
        <?php
        // Display this section if a user is logged in
        if(isset($_SESSION['username'])) { ?>
                       
            <h2 class="">Items<span class="label"><a href="additem.php"><i class="ton-li-plus circle"></i></a></span></h2>
            <p class="help-block">All your items are displayed in this list.</p>
            <?php
                $item = new Item();
                $userId = 5; // dummy data TODO change this to the session user
                $items = $item->getAllItems($userId);
               
                foreach ($items as $key => $i) {
                    echo "<div class='data-row'>"; 
                        echo "<div class='data-field'>";
                            echo $i['name'];
                            echo "<a href='edititem.php?id=" . $i['id'] . "'><span class='glyphicon glyphicon-pencil'></span></a> "; 
                        echo "</div>";
                        echo "<div class='data-field'>";
                            echo $i['description'];
                        echo "</div>";
                        // echo "<div class='data-edit'>";  
                        // echo "</div>";
                    echo "</div>"; ?>                
                <?php } ?>            
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