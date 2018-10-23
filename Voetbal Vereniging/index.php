<?php require "require/logincheck.php";?>
<?php require "header.html";?>
<?php require "head.php" ?>
<!DOCTYPE html>
    <html lang="en">
            <header class="masthead bg-primary text-white text-center">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <style>
                    .mySlides {display:none}
                    .demo {cursor:pointer}
                </style
            </header>
            <body>
    <div class="w3-content" style="max-width:1200px">
        <img class="mySlides" src="image/001.jpg" style="width:100%">
        <img class="mySlides" src="image/003.jpg" style="width:100%">
        <img class="mySlides" src="image/004.jpg" style="width:100%">

        <div class="w3-row-padding w3-section">
            <div class="w3-col s4">
                <img class="demo w3-opacity w3-hover-opacity-off" src="image/001.jpg" style="width:100%" onclick="currentDiv(1)">
            </div>
            <div class="w3-col s4">
                <img class="demo w3-opacity w3-hover-opacity-off" src="image/003.jpg" style="width:100%" onclick="currentDiv(2)">
            </div>
            <div class="w3-col s4">
                <img class="demo w3-opacity w3-hover-opacity-off" src="image/004.jpg" style="width:100%" onclick="currentDiv(3)">
            </div>
        </div>
    </div>

<?php require "indexscript.php" ?>

    </body>
    </html>

    <h1 class="text-uppercase mb-0">Welkom <?php echo $_SESSION['username']->username; ?> bij ons voetbalteam AS '80</h1>
    <hr class="star-light">
    <h2 class="font-weight-light mb-0">Made by team 5</h2>

<?php require "footer.html" ;?>