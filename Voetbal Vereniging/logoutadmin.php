<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

require "header.html";

header('Refresh: 3; URL = login.php');
require "head.php";
require "headeradmin.php"
?>