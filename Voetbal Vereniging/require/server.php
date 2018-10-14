<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
        $servername = "127.0.0.1";
        $user = "2018_P1_05";
        $pass = "TYfoquCo!H7otA";
        $database = "2018_P1_05_design_vv";
//    $servername = "localhost:3309";
//    $user = "root";
//    $pass = "root11";
//    $database = "design_vv_app";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $user, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>