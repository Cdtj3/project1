<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>

<?php require "header.html";?>
<link rel="stylesheet" href="css\voetbalstyles.css">

<!DOCTYPE html>
    <html lang="en">
        <body>
            <div class="signup_header">
                <img src="image/001.jpg">
            </div>
            <h1>hallo <?php echo $_SESSION['username']; ?></h1>
            <p>Dit seizoen helemaal nieuw: De Grand Opening voor de AS'80 teams. Waar we dit vorig jaar voor alle selectieteams hebben georganiseerd, doen we het dit jaar ook voor alle AS'80 teams. <br>
            Hoe stoer is dat?!, om samen met je team aan al je familie, vrienden en kennissen geïntroduceerd te worden? Het veld op komen lopen in je stoere AS'80 tenue, vette muziek uit de speakers en wat al niet meer?...
            </p>
        </body>
    </html>
