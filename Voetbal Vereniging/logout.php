<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

echo 'Je bent uitgelogd';
header('Refresh: 2; URL = login.php');
?>