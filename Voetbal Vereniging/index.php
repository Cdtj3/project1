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

    <head>
        <title>Voetbalvereniging AS'80</title>
    </head>

    <body id="page-top">
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
                            <?php endif ?>
                        </div>

        <!-- Footer -->
        <?php require "footer.html";?>


    </body>
</html>
