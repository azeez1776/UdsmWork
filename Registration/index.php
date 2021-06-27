<?php
include '../config.php';

if (isset($_POST['submit'])) {
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $middleName = mysqli_real_escape_string($conn, $_POST['middleName']);
    $surName = mysqli_real_escape_string($conn, $_POST['surName']);
    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $file = mysqli_real_escape_string($conn, $_POST['file']);
    $CV = mysqli_escape_string($conn, $_FILES['file']['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobileNo = mysqli_real_escape_string($conn, $_POST['mobileNo']);
    $faceBook = mysqli_real_escape_string($conn, $_POST['faceBook']);
    $twitter = mysqli_real_escape_string($conn, $_POST['twitter']);
    $instagram = mysqli_real_escape_string($conn, $_POST['instagram']);

    $sql = "INSERT into users(firstName, middleName, surName, userName, password, CV, email, mobileNo, faceBook, twitter, instagram) VALUES('$firstName','$middleName', '$surName', '$userName', '$password', '$CV', '$email', '$mobileNo', '$faceBook', '$twitter', '$instagram')";

    if (mysqli_query($conn, $sql)) {

        echo "File Sucessfully uploaded";
    } else {
        echo "Error " . mysqli_error($conn);
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

</head>

<body class="home">
    <nav class="nav">
        <div class="nav_elem">
            <a href="../index.php">HOME</a>
            <a href="../AboutMe/index.php">ABOUT ME</a>
            <a href="../abdi.pdf">CV</a>
            <a href="../AboutMe/index.php">CONTACTS</a>
            <a href="index.php">REGISTER</a>
            <a href="../Login/index.php">LOGIN</a>
        </div>
    </nav>
    <div class="reg">
        <form class="form" method="POST" enctype="multipart/form-data">
            <h1>REGISTRATION</h1>
            <div>
                <label for="firstname" class="fnamel">First Name</label>
                <input type="text" name="firstName" class="fnameinp">
            </div>
            <div>
                <label for="firstname" class="fnamel">Middle Name</label>
                <input type="text" name="middleName" class="mnameinp">
            </div>
            <div>
                <label for="firstname" class="fnamel">Sur Name</label>
                <input type="text" name="middleName" class="snameinp">
            </div>
            <div>
                <label for="firstname" class="fnamel">Username</label>
                <input type="text" name="userName" class="unameinp">
            </div>
            <div>
                <label for="firstname" class="fnamel">Password</label>
                <input type="password" name="password" class="pass">
            </div>
            <div>
                <label for="firstname" class="fnamel">CV</label>
                <input type="file" name="file" class="cvup">
            </div>
            <div>
                <label for="firstname" class="fnamel">E-mail</label>
                <input type="email" name="email" class="email">
            </div>
            <div>
                <label for="firstname" class="fnamel">Mobile No.</label>
                <input type="text" name="mobileNo" class="mobi">
            </div>
            <div>
                <label for="firstname" class="fnamel">Facebook</label>
                <input type="text" name="faceBook" class="faceBook">
            </div>
            <div>
                <label for="firstname" class="fnamel">Twitter</label>
                <input type="text" name="twitter" class="twitter">
            </div>
            <div>
                <label for="firstname" class="fnamel">Instagram</label>
                <input type="text" name="instagram" class="insta">
            </div>
            <input name="submit" type="submit" class="form_sub">
        </form>
    </div>

</body>

</html>