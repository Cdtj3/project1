<?php require "require/logincheck_admin.php";?>
<html>
<head>
    <title> Admin Panel  </title>

    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
    <body>
        <div id="header" class="container-fluid">
            <center><img src="image/admin_icon.png" alt="adminLogo" id="adminLogo">
            <h3> Welcome to Admin Panel </h3></center>
        </div>

        <div id="sidebar" class="container-fluid">
            <ul>
                <a href="gebruikers.php" target="_blank" style="color: white; text-decoration: none;"> <li> Manage Gebruiker </li><a/>
                <a href="https//www.blank.nl" target="_blank" style="color: white; text-decoration: none;"> <li> Manage Media </li><a/>
                <a href="https//www.blank.nl" target="_blank" style="color: white; text-decoration: none;"> <li> Manage Content  </li><a/>
                <a href="logout_admin.php" target="_blank" style="color: white; text-decoration: none;"> <li> Logout </li><a/>
            </ul>
        </div>

        <div id="data">
            <br><br>
            <p> Onderhouds pagina voor voetbal website</p>
        </div>

    </body>
</html>
