
<?php include('require/register.php') ?>
<!DOCTYPE html>
<html lang="en">

<div class="signup_container">
    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <fieldset>
            <div class="signup_form">
                <label>gebruikesnaam</label>
                <input type="text" name="username">
            </div>
            <div class="signup_form">
                <label>email</label>
                <input type="email" name="email">
            </div>
            <div class="signup_form">
                <label>wachtwoord</label>
                <input type="password" name="password_1">=
            </div>
            <div class="signup_form">
                <label>wachtwoord bevestigen</label>
                <input type="password" name="password_2">
            </div>
            <div class="signup_form">
                <label>voornaam</label>
                <input type="text" name="f_name">
            </div>
            <div class="signup_form">
                <label>geslacht</label>
                <input type="radio" name="gender" value="Male"> Man
                <input type="radio" name="gender" value="Female"> Vrouw
                <input type="radio" name="gender" value="Other"> Anders
            </div>
            <div class="signup_form">
                <label>type</label>
                <input type="text" name="type">
            </div>
            <div class="signup_form">
                <label>membercol</label>
                <input type="text" name="member_col">
            </div>
            <div class="signup_form">
                <label>rijbewijs</label>
                <input type="radio" name="year_driving_licence" value="1"> ja
                <input type="radio" name="year_driving_licence" value="0"> nee
            </div>
            <div class="signup_header">
                <label>ledennummer</label>
                <input type="int" name="member_nr">
            </div>
            <button type="submit" class="btn" name="reg_user">registreren</button>
        </fieldset>
    </form>
</div>
