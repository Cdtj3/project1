<?php require "header.html";?>
<!DOCTYPE html>
<html>
<head>
    <title>Voetbalvereniging AS'80</title>
    <link rel="stylesheet" href="css\voetbalstyles.css">
    <div class="imgcontainer">
        <img src="image/001.jpg" alt="voetbalplaatje" class="voetbalplaatje">
    </div>
<h1>Upload hier uw foto's/video's</h1>

        <title>Foto's uploaden</title>

    </head>
<body>
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
