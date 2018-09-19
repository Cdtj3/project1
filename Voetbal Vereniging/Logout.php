<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

echo 'You have cleaned session';
header('Refresh: 2; URL = login.php');
?>
/**
 * Created by PhpStorm.
 * User: achraf
 * Date: 19-9-2018
 * Time: 10:52
 */