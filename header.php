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
                <a class="navbar-brand" href="index.php">myGifts</a>
            </div><!-- .navbar-header -->

            <div class="navbar-collapse collapse">
                <ul class="nav-pills-md nav-pills ">
                    <li><a href="addrecipient.php" class="btn btn-info btn-lg">Add recipient</a></li>
                    <li><a href="additem.php" class="btn btn-info btn-lg">Add item</a></li>
                    <li><a href="addgift.php" class="btn btn-info btn-lg">Add gift</a></li>
                </ul>
                <form class="navbar-form navbar-right" method="post" action="app.php" role="form">
                    <input type="submit" class="btn btn-danger" name="logout" value="Log out" />
                </form>
                <span class="navbar-right navbar-brand">Logged in: <a href="profile.php"><?php echo $_SESSION['username']; ?></a></span>
            </div><!-- .navbar-collapse -->
        </div><!-- .container -->
    </nav>
<?php }