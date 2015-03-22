<?php

// include the files that keeps track on all necessary files
require_once('app.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>myGifts</title>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" type="text/css"  href="resources/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"  href="resources/css/vendor/signin.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css"  href="resources/css/style.css">

</head>
<body>

<?php if(isset($_SESSION['username'])) { ?>
    <!-- Display navigation bar if a user is logged in -->
    <nav class="navbar navbar-fixed-top">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">myGifts</a>
            </div><!-- .navbar-header -->

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="profile.php">Profile</a></li>
                </ul>
                <form class="navbar-form navbar-right" method="post" action="app.php" role="form">
                    <input type="submit" class="" name="logout" value="Log out" />
                </form>
                <span class="navbar-right navbar-brand">Logged in: <?php echo $_SESSION['username']; ?></span>

            
                
            </div><!-- .navbar-collapse -->
        </div><!-- .container -->
    </nav>
<?php }