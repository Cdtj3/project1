<?php require ('server.php');

if (isset($_POST['reg_user'])) {



    $username = $_POST['username'];

    $email = $_POST['email'];

    $password_1 = $_POST['password_1'];

    $password_2 = $_POST['password_2'];

    $f_name = $_POST['f_name'];

    $gender = $_POST['gender'];

    $member_col = $_POST['member_col'];

    $type = $_POST['type'];

    $year_driving_licence = $_POST['year_driving_licence'];

    $member_nr = $_POST['member_nr'];



    // form validation: ensure that the form is correctly filled

    if (empty($username)) { array_push($errors, "Username is required"); }

    if (empty($email)) { array_push($errors, "Email is required"); }

    if (empty($password_1)) { array_push($errors, "Password is required"); }



    // check if passwords match

    if ($password_1 != $password_2) {

        array_push($errors, "The two passwords do not match");

    }



    // register user if there are no errors in the form

    if (count($errors) == 0) {

        $password = $password_1;

        $password = hash("sha256",$password);

        $query = $conn->prepare("INSERT INTO member (id, username, email, password, firstname, gender, membercol, type, year_driving_licence) 

                                            VALUES ('$member_nr','$username','$email','$password','$f_name','$gender','$member_col','$type','$year_driving_licence')");

        $query->execute();



        require ('autologin.php');

    }

}