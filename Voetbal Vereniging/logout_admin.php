<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

require "header.html";

header('Refresh: 0; URL = login_admin.php');
?>