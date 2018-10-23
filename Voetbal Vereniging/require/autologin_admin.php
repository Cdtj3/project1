<?php
$query = $conn->prepare("select * from admin where username = ? and password = ?");
$query->bindValue(1,$username);
$query->bindValue(2,hash("sha256", $password));
$query->execute();
$id = $query->fetchObject();

if($id != null){
    $_SESSION["admin"] = $id;
    $_SESSION['success'] = "You are now logged in";
    header('location: admin.php');
}