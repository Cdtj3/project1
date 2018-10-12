<?php include('require/register.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Voetbalclub avv</title>
        <link rel="stylesheet" href="css/head.css">
        <link rel="stylesheet" href="css/register.css">
    </head>

    <body>
        <?php require "header.html";?>

        <div class="signup_header">
            <img src="image/001.jpg">
        </div>

        <div class="signup_container">
            <form method="post" action="register.php">

                <?php include('errors.php'); ?>
                <label><p>Gebruikersnaam</p></label>
                <input type="text" name="username" value="<?php echo $username; ?>">
                <label>Email-adres</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
                <label>wachtwoord</label>
                <input type="password" name="password_1">
                <label>bevestig wachtwoord</label>
                <input type="password" name="password_2">
                <label>naam</label>
                <input type="text" name='name'>
                <label>achternaam</label>
                <input type="text" name='last'>
                <label>gender</label>
                <input type="radio" name="gender" value="Male"> Man
                <input type="radio" name="gender" value="Female"> Vrouw
                <input type="radio" name="gender" value="Other"> Anders
                <label>membercol</label>
                <input type="text" name="member_col">
                <label>type</label>
                <input type="text" name="type">
                <label>Rijbewijs</label>
                <input type="radio" name="year_driving_licence" value="1"> ja
                <input type="radio" name="year_driving_licence" value="0"> nee
                <button type="submit" class="btn" name="reg_user">registreren</button>
            </form>
        </div>
    </body>
</html>