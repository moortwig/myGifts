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

    <!-- TONICONS -->
    <link rel="stylesheet" type="text/css"  href="resources/css/vendor/tonicons.css">

    <!-- Nanoscroller CSS -->
    <link rel="stylesheet" href="resources/css/vendor/nanoscroller.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css"  href="resources/css/style.css">

</head>
<body>

<nav class="navbar navbar-fixed-top navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-coll" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">myGifts</a>
        </div><!-- .navbar-header -->

        <div class="collapse navbar-collapse" id="navbar-coll">
            <div class="container">
                <!-- if not logged in, display disabled menu icons -->
                <?php if(!isset($_SESSION['username'])) { ?>
                <ul class="nav navbar-nav">
                    <li class="btn" disabled="disabled"><i class="ton-li-people-7"></i></li>
                    <li class="btn" disabled="disabled"><i class="ton-li-bag-1"></i></li>
                    <li class="btn" disabled="disabled"><i class="ton-li-box-1"></i></li>
                </ul>
                <?php } ?>

                <?php if(isset($_SESSION['username'])) { ?>
                <ul class="nav navbar-nav">
                    <li><a href="addrecipient.php" class="btn"><i class="ton-li-people-7"></i></a></li>
                    <li><a href="additem.php" class="btn"><i class="ton-li-bag-1"></i></a></li>
                    <li><a href="addgift.php" class="btn"><i class="ton-li-box-1"></i></a></li>
                </ul>

                
                    <form class="navbar-form navbar-right" method="post" action="app.php" role="form">
                        <span class="navbar-text">Logged in: <a href="profile.php"><?php echo $_SESSION['username']; ?></a></span>
                        <button type="submit" class="btn btn-danger" name="logout">Log out</button>
                    </form>
                <?php } else { ?>
                    <form class="navbar-form navbar-right" method="post" action="app.php" role="form">
                        <label for="inputUsername" class="sr-only">Username</label>
                        <input type="text" name="user" placeholder="Username" class="form-control" />
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" name="pass" placeholder="Password" class="form-control" />
                        <button type="submit" name="login" class="btn btn-s btn-primary">LOG IN</button>
                    </form>
                <?php } ?>
            </div>
        </div><!-- .navbar-collapse -->
    </div><!-- .container -->
</nav>
