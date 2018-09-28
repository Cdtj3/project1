<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registratie & login </title>
	<link rel="stylesheet" type="text/css" href="voetbalstyles.css">
    <img src="https://www.as80.nl/site/img/clublogo3.png" alt="voetballogo" class="voetballogo">
    <img src="https://www.as80.nl/files/library/header/nieuw/001.jpg" alt="voetbalplaatje" class="voetbalplaatje">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

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