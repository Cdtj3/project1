<<<<<<< HEAD
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
        $database = "2018_P1_05_VV";
//    $servername = "localhost:3308";
//    $user = "root";
//    $pass = "Welkom01";
//    $database = "design_vv";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $user, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
=======
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
        $database = "2018_P1_05_VV";
//    $servername = "localhost:3308";
//    $user = "root";
//    $pass = "Welkom01";
//    $database = "design_vv";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $user, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
>>>>>>> 75ee6cfdaefaa8a204cdb0ae473d00ea6d03d7a8
?>