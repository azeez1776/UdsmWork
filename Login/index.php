<?php
session_start();
include "../config.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            <a href="../Registration/index.php">REGISTER</a>
            <a href="../Login/index.php">LOGIN</a>
        </div>
    </nav>
    <div class="reg">
        <form action="index.php" class="form" method="POST" enctype="multipart/form-data">
            <h1>LOGIN</h1>

            <div>
                <label for="firstname" class="fnamel">Username</label>
                <input type="text" name="userName" class="unameinp">
            </div>
            <div>
                <label for="firstname" class="fnamel">Password</label>
                <input type="password" name="password" class="pass">
            </div>

            <input type="submit" name="login_user" class="form_sub">
        </form>
    </div>
    <?php
    if (isset($_POST['login_user'])) {
        // receive all input values from the form
        $userName = mysqli_real_escape_string($conn, $_POST['userName']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);



        $user_check_query = "SELECT * FROM users WHERE userName='$userName' AND password='$password' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);

        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            $_SESSION['userName'] = $user['userName'];
            $_SESSION['password'] = $user['password'];
        } else {
            echo "User not found";
        }
    }
    if (isset($_SESSION["userName"])) {
        header("Location:courses.php");
    }
    ?>
</body>

</html>