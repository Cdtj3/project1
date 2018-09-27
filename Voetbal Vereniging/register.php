<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Voetbalclub avv</title>
        <link rel="stylesheet" href="css\voetbalstyles.css">
    </head>
<!--<form action="action_page.php">-->
    <body>
        <?php require "header.html";?>

        <div class="signup_logo">
            <img src="image/clublogo.png">
        </div>
        <div class="signup_header">
            <img src="image/001.jpg">
        </div>

        <div class="signup_container">
            <label for="name"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" name="remember"> Remember me
            </label>
        </div>
    </body>
</html>