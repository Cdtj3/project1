<?php
$query = $conn->prepare("select * from member where username = ? and password = ?");
$query->bindValue(1,$username);
$query->bindValue(2,hash("sha256", $password));
$query->execute();
$id = $query->fetchObject();

if($id != null){
    $_SESSION["username"] = $id;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
}