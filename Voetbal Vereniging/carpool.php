<?php include('require/server.php'); require "header.html";
// Check if user is logged in
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <?php require "head.php" ?>
    <body id="page-top">
        <!-- Header -->
        <header class="masthead bg-primary text-white text-center">
            <div class="container">
                <img class="img-fluid mb-5 d-block mx-auto" src="image/001.jpg" alt="">
                <h1 class="text-uppercase mb-0">Welke bij ons voetbalteam AS '80</h1>
                <hr class="star-light">
                <h2 class="font-weight-light mb-0">Made by team 5</h2>
            </div>
        </header>
        <?php require "footer.html" ;?>
    </body>
</html>