<?php
//session_start();
//
//if (!isset($_SESSION['username'])) {
//    $_SESSION['msg'] = "You must log in first";
//    header('location: login.php');
//}
//
//if (isset($_GET['logout'])) {
//    session_destroy();
//    unset($_SESSION['username']);
//    header("location: login.php");
//}
//
//?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Voetbalvereniging AS'80</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/scrolling-nav.css" rel="stylesheet">
        <link rel="stylesheet" href="css\voetbalstyles.css">

    </head>

    <body id="page-top">

        <!-- Navigation -->
        <?php require "header.html";?>

        <header>
            <div class="signup_header">
                <img src="image/001.jpg">
            </div>
        </header>

        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="content">

                            <!-- notification message -->
                            <?php if (isset($_SESSION['success'])) : ?>
                                <div class="error success" >
                                    <h3>
                                        <?php
                                        echo $_SESSION['success'];
                                        unset($_SESSION['success']);
                                        ?>
                                    </h3>
                                </div>
                            <?php endif ?>

                            <!-- logged in user information -->
                            <?php  if (isset($_SESSION['username'])) : ?>
                                <p>Welkom bij Almere AS80 <strong><?php echo $_SESSION['username']; ?></strong></p>
                                <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                            <?php endif ?>
                        </div>

        <!-- Footer -->
        <?php require "footer.html";?>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom JavaScript for this theme -->
        <script src="js/scrolling-nav.js"></script>

    </body>

</html>
