<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

require "header.html";
header('Refresh: 3; URL = login.php');
?>
<link rel="stylesheet" type="text/css" href="css/voetbalstyles.css">
<img src="https://www.as80.nl/files/library/header/nieuw/001.jpg" alt="voetbalplaatje" class="voetbalplaatje">

<h1>U bent succesvol uitgelogd!</h1>
<h2>U wordt nu doorgestuurd naar de inlogpagina!</h2>