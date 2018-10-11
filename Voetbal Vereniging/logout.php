<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

require "header.html";
header('Refresh: 3; URL = login.php');
?>
<link rel="stylesheet" type="text/css" href="css/head.css">
<link rel="stylesheet" type="text/css" href="css/logout.css">
<header>
    <div class="signup_header">
        <img src="image/001.jpg">
    </div>
</header>

<h1>U bent succesvol uitgelogd!</h1>
<h2>U wordt nu doorgestuurd naar de inlogpagina!</h2>