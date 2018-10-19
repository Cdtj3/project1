<?php
// Create database connection
require ('require/server.php'); ?>
<?php
// Check if user is logged in
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
};
?>
<?php
// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = $_POST['image_text'];

    // image file directory
    $target = "images/".basename($image);


    //check if image upload was successful
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        // execute query
        $query = $conn->prepare("INSERT INTO images (image, image_text) VALUES (?, ?)");
        $query->bindValue(1, $image);
        $query->bindValue(2, $image_text);
        $query->execute();
        $msg = "Image uploaded successfully";
        header("location: foto.php");
    }else{
        $msg = "Failed to upload image";
    }
}
//select all images from database
$query = $conn->prepare("SELECT * from images");

$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);
?>
<?php require "header.html";?>
<?php require "head.php" ?>
<!DOCTYPE html>
<html lang="en">
<body id="page-top">
<section class="portfolio" id="foto">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Foto</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-md-6 col-lg-4">
            </div>
        </div>

        <style type="text/css">
            img{
                float: left;
                margin: 5px;
                width: 300px;
                height: 140px;
            }
        </style>

        <?php
        echo $msg;
        foreach($result as $img) {
            echo "<div id='img_div'>";
            echo "<img src='images/$img->image'>";
            echo "<p>".$img->image_text."</p>";
            echo "</div>";
        }

        ?>

    </div>
</section>
</body>

<form method="POST" action="foto.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
        <input type="file" name="image">
    </div>
    <div>
      <textarea
          id="text"
          cols="40"
          rows="4"
          name="image_text"
          placeholder="Vertel iets over de foto..."></textarea>
    </div>
    <div>
        <button type="submit" name="upload">Bevestiging upload foto</button>
    </div>
</form>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>

<?php require "footer.html" ;?>
