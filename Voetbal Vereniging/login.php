<?php   include('require/login.php'); require "header.html";?>
<!DOCTYPE html>
<html>
<head>
	<title>Registratie & login </title>
	<link rel="stylesheet" type="text/css" href="css/head.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <header>
        <div class="signup_header">
            <img src="image/001.jpg">
        </div>
    </header>
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php');?>

		<div class="input-group">
			<label>Gebruikersnaam</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Wachtwoord</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Nog geen account? <a href="register.php">Sign up</a>
		</p>
	</form>

</body>
</html>