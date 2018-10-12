<?php include('require/server.php'); require "header.html";
// Check if user is logged in
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css\carpool.css">
        <link rel="stylesheet" href="css/head.css">
    </head>
    <body>
    <div class="signup_header">
        <img src="https://imgix.ttcdn.co/i/product/original/0/214112-7e4574c9b3af459ab894496f2c3707dd.jpeg?quality=50&width=2000&bg-color=fff&auto=webp&fit=bounds&fm=jpeg" alt="voetbalplaatje" class="voetbalplaatje">
    </div>
        <h1>Carpool</h1>
    </body>
    <?php require "footer.html";?>
</html>