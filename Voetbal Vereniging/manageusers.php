<?php require "head.php" ?>
<?php require "headeradmin.php" ?>
<body id="page-top">
<!-- Header -->
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <h1 class="text-uppercase mb-0">Hier kunt u gebruikers beheren</h1>
        <hr class="star-light">
        <!--        <h2 class="font-weight-light mb-0">Made by team 5</h2>-->
    </div>
</header>

<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Membercol</th><th>Email</th><th>Gender</th><th>Type</th><th>jaren rijbewijs</th><th>username</th><th>password</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost:3307";
$username = "root";
$password = "root";
$dbname = "2018_p1_05_design_vv";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, firstname, membercol, email, gender, type, year_driving_licence, username, password FROM member");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
