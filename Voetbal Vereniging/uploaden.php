<?php require "header.html";?>
<!DOCTYPE html>
<html>
<head>
    <title>Voetbalvereniging AS'80</title>
    <link rel="stylesheet" href="css\head.css">
    <link rel="stylesheet" href="css\upload.css">


        <title>Foto's uploaden</title>

    </head>
<body>
<header>
    <div class="signup_header">
        <img src="image/001.jpg">
    </div>
</header>
<h1>Upload hier uw foto's/video's</h1>
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
              placeholder="Zeg iets over je foto"></textarea>
        </div>
        <div>
            <button type="submit" name="upload">Uploaden</button>
        </div>
    </form>

</body>
</html>
