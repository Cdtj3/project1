<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>
<?php require "header.html";?>
<!--<!DOCTYPE html>-->
<!--    <html lang="en">-->
<!--        <body>-->
<!--            <div class="signup_header">-->
<!--                <img src="image/001.jpg">-->
<!--            </div>-->
<!--            <h1>hallo --><?php //echo $_SESSION['username']->username; ?><!--</h1>-->
<!--            <p>Dit seizoen helemaal nieuw: De Grand Opening voor de AS'80 teams. Waar we dit vorig jaar voor alle selectieteams hebben georganiseerd, doen we het dit jaar ook voor alle AS'80 teams. <br>-->
<!--            Hoe stoer is dat?!, om samen met je team aan al je familie, vrienden en kennissen geïntroduceerd te worden? Het veld op komen lopen in je stoere AS'80 tenue, vette muziek uit de speakers en wat al niet meer?...-->
<!--            </p>-->
<!--        </body>-->
<!--    </html>-->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Voetbal vereniging AS80</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">


<!-- Header -->
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="image/001.jpg" alt="">
        <h1 class="text-uppercase mb-0">Welkom <?php echo $_SESSION['username']->username; ?> bij ons voetbalteam AS '80</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Made by team 5</h2>
    </div>
</header>
<?php require "footer.html" ;?>
</body>
</html>