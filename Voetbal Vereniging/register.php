<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Voetbalclub avv</title>
        <link rel="stylesheet" href="css/head.css">
    </head>

    <body>
        <?php require "header.html";?>

        <div class="signup_header">
            <img src="image/001.jpg">
        </div>

        <div class="signup_container">
            <form method="post" action="register.php">

                <?php include('errors.php'); ?>
                <label>Gebruikersnaam</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
                <label>Email-adres</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
                <label>wachtwoord</label>
                <input type="password" name="password_1">
                <label>bevestig wachtwoord</label>
                <input type="password" name="password_2">
                <button type="submit" class="btn" name="reg_user">registreren</button>
            </form>
        </div>
    </body>
</html>