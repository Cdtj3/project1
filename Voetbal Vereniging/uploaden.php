<?php
// Create database connection
    require ('require/server.php');

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
        header("location: uploaden.php");
    }else{
        $msg = "Failed to upload image";
    }
}
    //select all images from database
    $query = $conn->prepare("SELECT * from images");

    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_OBJ);
    require "header.html";?>
<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <style type="text/css">
        #content{
            width: 50%;
            margin: 20px auto;
            border: 1px solid #cbcbcb;
        }
        form{
            width: 50%;
            margin: 20px auto;
        }
        form div{
            margin-top: 5px;
        }
        #img_div{
            width: 80%;
            padding: 5px;
            margin: 15px auto;
            border: 1px solid #cbcbcb;
        }
        #img_div:after{
            content: "";
            display: block;
            clear: both;
        }
        img{
            float: left;
            margin: 5px;
            width: 300px;
            height: 140px;
        }
    </style>
</head>
<body>
<div id="content">
<?php
    echo $msg;
    foreach($result as $img) {
        echo "<div id='img_div'>";
        echo "<img src='images/$img->image'>";
        echo "<p>".$img->image_text."</p>";
        echo "</div>";
    }
//    ?>
    <form method="POST" action="uploaden.php" enctype="multipart/form-data">
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
              placeholder="Say something about this image..."></textarea>
        </div>
        <div>
            <button type="submit" name="upload">POST</button>
        </div>
    </form>
</div>
</body>
</html>